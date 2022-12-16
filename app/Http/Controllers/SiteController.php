<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SiteController extends Controller
{
    public function index(){

        return view('interface/index');
    }
 
    public function faq(){

        return view('interface/faq');
    }
    public function about(){

        return view('interface/about');
    }
    public function services(){

        return view('interface/services');
    }
    public function plus(){

        return view('interface/services-plus');
    }
    
    
}
