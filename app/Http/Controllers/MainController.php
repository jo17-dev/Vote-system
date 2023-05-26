<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Symfony\Contracts\Service\Attribute\Required;
use Illuminate\Support\Facades\Hash;

class MainController extends Controller
{
    function login(){
        return view('home.signin-signup');
    }

    function register(){
        return view('home.signin-signup');
    }


// enregsitrer un user
    function save(Request $request){

        // valider la requette
        $request->validate([
            'nom'=>'required',
            'email'=>'required|email',
            'password'=>'required|min:5|max:12'
        ]);

        // Insertion des donnees dans la base de donnee
        $admin = new User;
        $admin->nom = $request->nom;
        $admin->email = $request->email;
        $admin->password = Hash::make($request->password);
        $save = $admin->save();

        if($save){
            return back()->with('success', 'Nouvelle utilisateur ajoute avec success');
        }else{
            return back()->with('fail', 'veuillez reessayer');
        }
    }


    function check(Request $request){
        
        //valider la requette
        $request->validate([
            'email'=>'required|email',
            'password'=>'required|min:5|max:12'
        ]);

        $userInfo = User::where('email','=',$request->email)->first();

        if(!$userInfo){
            return back()->with('fail', 'Email incorrect');
        }else{
            if(HASH::check($request->password, $userInfo->password)){
                $request->session()->put('LoggedUser', $userInfo->Id);
                return redirect('dashboard/');
            }else{
                return back()->with('fail', 'Mot de passe Incorrect');
            }
        }
    }
 
    function dashboard(){
        $data = ['LoggedUserInfo'=> User::where('id','=', session('LoggedUser'))->first()];
        return view('dashboard/index', $data);
    }

    function logout(){
        if(session()->has('LoggedUse')){
            session()->pull('loggedUser');
            return redirect('home/sign');
        }
    }
}
