<?php

namespace App\Http\Controllers;

use App\Models\Banque;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UsersController extends Controller
{
    public function index(){        
        
        
        
        return view('index',['banque'=>Banque::where('user_id', Auth::id())->first()] );
    }

    public function profil(){

        return view('profil');
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


}
