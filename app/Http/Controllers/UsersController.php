<?php

namespace App\Http\Controllers;

use App\Models\User;

use App\Models\Banque;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class UsersController extends Controller
{
    public function index(){        
        
        
        
        return view('index',['banque'=>Banque::where('user_id', Auth::id())->first()] );
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

  public function changemdp(){

    return view ('changemdp');
    
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

        //Regle de validations

            $request->validate([
                'password_confirmation'=>'required|string',
                'password'=>'confirmed',
                'current_password'=>'current_password',
            ]);


            //Modification de l'ancian mdp par le nouveau

            $user->password = Hash::make($request->password);

            $user->save();

            //retour sur la page avec un message de succes
            return back()->with('success', 'Mot de passe modifier avec succès');
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




}
