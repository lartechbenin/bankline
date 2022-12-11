<?php

namespace App\Http\Livewire;

use Livewire\Component;

class Livewiresignup extends Component
{
    //les champs de la base de donnees representer par des variable

    public $nom = "";
    public $prenom = "";
    public $pays = "";
    public $email = "";
    public $telephone = "";
    public $date_naissance = "";
    public $sexe = "";
    public $numero_carte = 0;
    public $password = "";
    public $password_confirmation = "";
    public $profession = "";
    public $devise = "";
    public $adresse_domicile = "";
    public function render()
    {
        return view('livewire.livewiresignup');
    }
}
