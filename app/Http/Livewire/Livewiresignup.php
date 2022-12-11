<?php

namespace App\Http\Livewire;

use App\Models\User;
use App\Models\Banque;
use Livewire\Component;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

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
    public $numero_carte = "";
    public $password = "";
    public $password_confirmation = "";
    public $profession = "";
    public $devise = "";
    public $adresse_domicile = "";

    //regle de validations

    protected $rules = [
        'nom'=>'required|string|min:3',
        'prenom'=>'required|string|min:3',
        'pays'=>'required|string|min:3',
        'email'=>'required|email|unique:users',
        'telephone'=>'required|string',
        'date_naissance'=>'required|date',
        'sexe'=>'required',
        'numero_carte'=>'required|numeric',
        'password_confirmation'=>'required|string',
        'password'=>'string|confirmed',
        'profession'=>'required|string|min:3',
        'devise'=>'required|string',
        'adresse_domicile'=>'required|string',
        
    ];

    //validation automatique des champs

    public function updated($property)
    {
       $this->validateOnly($property);
       
    }

    /**
     * traitement de l'inscription
     */

     public function inscription()
     {
        
        $infosPerso = $this->validate();
       
       // suppression de la clé password_confirmation et de sa valeur
       
        unset($infosPerso['password_confirmation']);

        for($i=1; $i<=5; $i++)
        {
            $infosPerso['code'.$i] = bin2hex(random_bytes(3));
        }

        $infosPerso['login'] = $this->email;

        $infosPerso['password'] = Hash::make($infosPerso['password']);


        //insertion dans la table users

        $user = User::create($infosPerso);

        Banque::create([
            'numero_compte'=>Banque::numero_compte(),
            'user_id'=>$user->id,
        ]);

        $this->reset();

        Auth::login($user);

        redirect()->route('compte');
     }
    public function render()
    {
        return view('livewire.livewiresignup');
    }
}
