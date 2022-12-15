<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class Livewirelogin extends Component
{
    //les variables

    public $email = "";
    public $password = "";

    //regles de validations

    protected $rules = ['email'=>'required|email',
                        'password'=>'required|string'
                    ];
    
    //validation automatique

    public function updated($property)
    {
        $this->validateOnly($property);
    }

    /**
     * traitement de la connexion de l'user
     */

     public function connexion(Request $request){

        $this->validate();

       

        
        if(Auth::attempt($this->validate())){

            
            $request->session()->regenerate();
            
            redirect()->route('compte');
        }

       return session()->flash('email', 'email ou mot de passe erroné');
       

        
        
     }
    public function render()
    {
        return view('livewire.livewirelogin');
    }
}
