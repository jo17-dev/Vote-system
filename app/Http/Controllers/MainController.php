<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Symfony\Contracts\Service\Attribute\Required;

class MainController extends Controller
{
    function login(){
        return view('home.signin-signup');
    }

    function register(){
        return view('home.signin-signup');
    }

    function save(Request $request){
        $request->validate([
            'nom'=>'required',
            'email'=>'required|email',
            'password'=>'required|min=5:max=12'
        ]);
    }
}
