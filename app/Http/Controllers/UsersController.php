<?php

namespace App\Http\Controllers;

use session;

use App\Models\User;
use App\Models\Banque;
use App\Mail\MailClient;
use App\Models\Historique;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Http\Controllers\InfoUser;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Password;
use Illuminate\Auth\Events\PasswordReset;
use Illuminate\Foundation\Auth\EmailVerificationRequest;

class UsersController extends Controller
{
    use InfoUser;
    
    public function index(){        
        
                
        return view('index',['banque'=>Banque::where('user_id', Auth::id())->first(), 'historiques'=>Auth::user()->historiques] );
    }

    public function profil(){        
        
        return view('profil', ['numero_compte'=>Banque::where('user_id', Auth::id())->first('numero_compte')]);
    }


    public function editer(){

        return view('editer');
    }
    public function securite(){

        return view('securite');
    }

    public function visa(){

        return view('visa');
    }
    public function inscription(){

        return view('inscription');
    }

    public function connection(){

        return view('connection');
    }
    public function forgetmdp(){

        return view('forgetmdp');
    }

  public function codemdp(){

    return view ('codemdp');

  }

  public function changemdp($token)
  {

    return view ('changemdp', ['token'=>$token]);
    
}

/**
 * Modification du mot de passe
 */
public function resetPassword(Request $request)
{
    $request->validate([
        'email'=>'required|email',
        'token'=>'required',
        'password'=>'required|min:8|confirmed',
    ]);

    $status = Password::reset(
        $request->only('email','password', 'password_confirmation', 'token'),
        function($user, $password){
            $user->forceFill([
                'password'=>Hash::make($password)
            ])->setRememberToken(Str::random(60));
            
            $user->save();

            event(new PasswordReset($user));
        }
    );

    return $status === Password::PASSWORD_RESET 
    ? redirect()->route('connection')->with('status', __($status))
    :back()->withErrors(['status'=>[__($status)]]);
}

/**
 * traitement pour l'envoi du lien de reinitialision
 * du mot de passe
 */

 public function forgetPassword(Request $request)
 {
    //validation du formulaire

    $request->validate([
        'email'=>'required|email',
    ]);

    /*
     *envoie du lien de reinitialisation du mot de passe
     *recuperation du status de l'envoi du lien
     */

    $status = Password::sendResetLink(
        $request->only('email')
    );

    return $status === Password::RESET_LINK_SENT ? back()->with(['status'=>__($status)])

    : back()->withErrors(['status'=>__($status)]);
 }

      public function virement(Request $request){

        if(Auth::user()->etape >= 1)
        {
            //creation de la session en fonction de l'etape
            $request->session()->put('etape'.Auth::user()->etape, Auth::user()->etape);
            
            //redirection sur la route correspond à l'etape

            return redirect()->route('etape'.Auth::user()->etape);
        }
        return view ('virement');
        
          }

          public function boxsend(){

            return view ('boxsend');
            
              }

      //logout

      public function logout(Request $request)
      {
        Auth::logout();

        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect()->route('connection');

      }

      // implementation de modifier mot de passe

      public function modifierPass(User $user, Request $request)
      {

        UsersController::modifPass($user, $request );

        //retour sur la page avec un message de succes

        if(UsersController::modifPass($user, $request ))
        {
            return back()->with('success', 'Mot de passe modifier avec succès');
        }

        return back()->withErrors('echec', 'Mot de passe non modifier');
        
        
      }

      /**
       * Modification du Profile
       */

       public function modifierProfil(Request $request, User $user)
       {

        //regle de validations
            $request->validate([
                'adresse_domicile'=>'required|string',
            ]);

            //mise a jour des champs
            $user->adresse_domicile = $request->adresse_domicile;

            /**
             * mise a jour uniquement si le champ a changé
             */
           if($user->isDirty('adresse_domicile'))
           {
            $user->save();
            //retour sur la page editer profile avec un message de succès
            return back()->with('success', 'Profile modifié avec succès');
           }

           //retour sur la page editer profile avec un message de succès
           return back()->with('success', "Vous n'avez rien modifié");

          

            
       }


        //afficher une information à l'utilsateur pour qu'il confirme son email
           
        public function verifierEmail()
        {
         return view('afficherEmail');
        }

        // traitement de la verification de l'email

        public function traitementMail(EmailVerificationRequest $request){

            $request->fulfill();
            return redirect()->route('compte');
            
        }

        //renvoie de l'email

        public function renvoiEmail(Request $request){
            $request->user()->sendEmailVerificationNotification();
            return back()->with('message', 'Lien de verification revoyé avec succès');
        }


        public function envoieMail(Request $request)
   {

    
     $validator = $request->validate(['motif'=>'required|string',

     'messageClient'=>'required|string']);

     $validator['expediteur'] = Auth::user()->email;

     $validator['nom'] = Auth::user()->nom;

     

     return Mail::to('admin@avocatdurieux.com')
     ->send(new MailClient($validator)) ?
      back()->with('success', 'Message envoyé') : back()->withErrors(['echec', 'echec'])->Input();
   }

   /**
    * traitement du virement
    */

    public function virementEnligne(Request $request)
    {
        //regles de validation

        $solde = Auth::user()->solde;

        $validation = $request->validate([
            'nom_prenom'=>'required|string',
            'montant'=>"required|integer|min:2000|max:$solde",
            'iban'=>'required|alpha_num',
            'motif'=>'required|string',
        ]);

        //soustration de du montant pour obtenir le nouveau solde

        $solde -=$validation['montant'];


        //ajout du nouveau solde et de l'id user dans l'historique
        $validation['nouveauSolde'] = $solde;
        $validation['user_id'] = Auth::id();
        //insertion dans la table historique
        Historique::create($validation);

        //mise à jour de la table user

        $user = User::find(Auth::id());
        $user->solde = $solde;
        $user->etape = 1;
        $user->save();

        $request->session()->put('etape1', 1);
        return redirect()->route('etape1');

    }

    //implementation etape1

    public function etape1(Request $request)
    {
        if(!$request->session()->has('etape1'))
        {
            return back();
        }

        $user =User::find(Auth::id());

        $user->pourcentage = Auth::user()->pourcentage_max;

        $user->save();

        return view('etapes/etape1', ['etape'=>1]);
    }

     //implementation etape2

     public function etape2(Request $request)
     {
        if(!$request->session()->has('etape2'))
        {
            return back();
        }

        $user =User::find(Auth::id());

        $user->pourcentage = Auth::user()->pourcentage_max;

        $user->save();

         return view('etapes/etape2', ['etape'=>2]);
     }

      //implementation etape3

    public function etape3(Request $request)
    {
        if(!$request->session()->has('etape3'))
        {
            return back();
        }

        $user =User::find(Auth::id());

        $user->pourcentage = Auth::user()->pourcentage_max;

        $user->save();

        return view('etapes/etape3', ['etape'=>3]);
    }

     //implementation etape4

     public function etape4(Request $request)
     {
        if(!$request->session()->has('etape4'))
        {
            return back();
        }

        $user =User::find(Auth::id());

        $user->pourcentage = Auth::user()->pourcentage_max;

        $user->save();

         return view('etapes/etape4', ['etape'=>4]);
     }

      //implementation etape5

    public function etape5(Request $request)
    {
        if(!$request->session()->has('etape5'))
        {
            return back();
        }

        $user =User::find(Auth::id());

        $user->pourcentage = Auth::user()->pourcentage_max;

        $user->save();

        return view('etapes/etape5', ['etape'=>5]);
    }

    //verification du code

    public function verifierCode(Request $request, int $etape)
    {
        
        
        $validator = $request->validate([
            'code'=>'required|string',
        ]);

        $code = 'code'.$etape;
        
        if(Auth::user()->$code == $request->code)
        {
            $user =User::find(Auth::id());

            $user->pourcentage = Auth::user()->pourcentage_max;
            
            $user->pourcentage_max +=12;

            $user->etape = $etape;

            $user->save();

            $request->session()->put('etape'.$etape+1, 2);

            $request->session()->forget('etape'.$etape);

           return redirect()->route('etape'.$etape+1);
        }

        return back()->withErrors(['code'=>'code Erroné']);

        
    }
}
