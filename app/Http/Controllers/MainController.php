<?php

namespace App\Http\Controllers;

use App\Models\Admin;
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
            'password'=>'required| min=5:max=12'
        ]);

        $admin = new Admin;
        $admin->name = $request->nom;
        $admin->email = $request->email;
        $admin->password = $request->password;
        $save = $admin->save();

        if($save){
            return back()->with('success', 'Nouvelle utilisateur ajoute avec success');
        }else{
            return back()->with('fail', 'veuillez reessayer');
        }
    }
}
