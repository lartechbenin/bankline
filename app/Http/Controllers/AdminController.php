<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\InfoUser;

class AdminController extends Controller
{

  use InfoUser;
  
    public function admin()
    {

        return view ('Admintemplate/template');
        
    }

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
    dd($user);
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

    $user->save();

    return back()->with('success', 'compte crédité avec succès');
   }

}