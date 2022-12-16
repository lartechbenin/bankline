<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Admin;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Database\Eloquent\Model;

trait InfoUser
{
    
    public function infoUser()
    {
        //Liste des clients
        $liste = [];

        $liste['listeClient'] = User::All(['id','nom', 'prenom', 'pays',
         'adresse_domicile', 'solde', 'created_at',]);

         $liste['transfert_list'] = User::where('etape', '>=', 1)->get();
        
        $liste['transfert_cour'] = User::where('etape', ">=",1 )->count();
        $liste['transfert_terminer'] = User::where('transfert_terminer', 1)->count();
        $liste['pourcentage'] = User::count()>0 ? ($liste['transfert_cour']*100)/User::count() : 0;

        return $liste;
    }

     // implementation de modifier mot de passe

     public function modifPass(Model $user, Request $request)
     {

       //Regle de validations

           $request->validate([
               'password_confirmation'=>'required|string',
               'password'=>'confirmed',
               'current_password'=>'current_password',
           ]);


           //Modification de l'ancian mdp par le nouveau

          
           $user->update([
            'password'=>Hash::make($request->password),
           ]);

           
     }
}
