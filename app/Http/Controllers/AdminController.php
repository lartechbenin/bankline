<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Admin;
use App\Mail\MailClient;
use Illuminate\Http\Request;
use App\Http\Controllers\InfoUser;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;

class AdminController extends Controller
{

  use InfoUser;
  
    

    public function adindex()
    {
      
        //Liste des clients
        
        return view ('adindex', AdminController::infoUser());
            
    }
  
  
    public function adcredit()
  {

    return view ('adcredit', AdminController::infoUser());
                
  }
  
  public function adcreditsend(User $user)
  {

      return view ('adcreditsend', $user);
                    
  }
                      
  
  public function adtransfert()
  {

    return view ('adtransfert', AdminController::infoUser());
                        
 }

    
 // implementation de modifier mot de passe

 public function modifierPass(Request $request)
 {

  
    //Regle de validations
AdminController::modifPass(Admin::find(Auth::id()), $request);
  
  return back()->with('success', 'Mot de passe modifier avec succès');
   
 }

 /**
  * modifier passe admin vue
  */

  public function modifPassAdmin(){

    
    return view('modifPassAdmin');
}

 public function admodif()
 {

    return view ('admodif', AdminController::infoUser());
    
  }
                              
  public function admodifsend()
  {

      return view ('admodifsend');                                
                 
  }

                                  
  public function aduserstatus()
  {

    return view ('aduserstatus');
              
  }
                                
  public function adminconnect()
  {

    return view ('adminconnect');
                                        
  }

  //supprimer un utilisateurs

  public function supprimer(User $user)
  {
    return view('confirmSup', $user);
  }

  public function sup(Request $request)
  {
    $user = User::find($request->id);

    $banque = $user->banque;
    
    $historiques = $user->historiques;

    $messages = $user->messages;

    if($banque != null)
    {
      
        $banque->delete();
      
    }
    

    if($messages->count() >=1)
    {
      $messages->map(function($message){
        $message->delete();
      });
    }
    

    if($historiques->count() >=1)
    {
      $historiques->map(function($historique){
        $historique->delete();
      });
    }

    $user->delete();

    return redirect()->route('adindex');

  }

  //Modifer un utilisateurs

  public function modifier(User $user)
  {
    return view ('admodifsend', $user);
  }

  /**
   * Mise a jour
   */

   public function miseAjour(Request $request)
   {

    /**
     * regles de validations
     */
       $validator = $request->validate([
        'nom'=>'required|string',
        'prenom'=>'required|string',
        'email'=>'required|email',
        'sexe'=>'required|alpha',
        'date_naissance'=>'required|string',
        'telephone'=>'required|numeric',
        'pays'=>'required|string',
        'adresse_domicile'=>'required|string',
        'devise'=>'required|string',
        'etape'=>'required|integer',
        'code1'=>'required|string',
        'code2'=>'required|string',
        'code3'=>'required|string',
        'code4'=>'required|string',
        'code5'=>'required|string',
        'pourcentage'=>'required|integer',
        'bloque_compte'=>'required|integer',
        'montant_bloque'=>'required|integer',
        'solde'=>'required|integer',
       ]);

       $user = User::find($request->id);

       
       
       return $user->update($validator) ? back()->with('success', 'mise à jour effectuée') : back()->withErrors(['echec'=>'mise à jour echoué'])->input();
       
   }

   //traitement du formulaire crediter pour ajouter des fonds à un client

   public function crediterMontant(Request $request)
   {
    /**
     * Recuperation de l'utilisateur qui sera crédité
     * modification de la variable solde par le montant sourmit par l'utilisateur
     * application de la function save() pour la mise a jour
     * return sur la page avec un message de succès
     */

     
     $user = User::find($request->id);
    
    $user->solde = $request->montant;

    $user->statut_compte = 'Actif';

    $user->save();

    return back()->with('success', 'compte crédité avec succès');
   }

   /**
    * traitement connexion
    */

    public function adminConnexion(Request $request)
    {

      
      //regles de validations

      $validator = $request->validate([
        'login'=>'required|string',
        'password'=>'required|string',
      ]);

      
      if(Auth::guard('admin')->attempt($validator)){

        $request->session()->regenerate();

        return redirect()->intended('adindex');
      }

      return back()->withErrors(['login'=>"vos identifants de connexion
       ne sont pas valides"])->onlyInput('login');



    }

    public function logout(Request $request)
      {
        Auth::logout();

        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect()->route('adminconnect');

      }

    
  
  /**
   * envoi mail du client depuis son compte
   * implementation des regles pour l'obliger a entre un motif et un message
   * envoi de son mail apres recuperation des info necessaire
   */

   

}