<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Symfony\Contracts\Service\Attribute\Required;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;

class MainController extends Controller
{
    function login(){
        return view('home.signin-signup');
    }

    function register(){
        return view('home.signin-signup');
    }

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

// validation des  donnees du formulaire de connexion  ---------------------------

    function check(Request $request){
        
        //valider la requette
        $request->validate([
            'email'=>'required|email',
            'password'=>'required|min:5|max:12'
        ]);
        
// verification des informations de connexion 
        $userInfo = User::where('email','=',$request->email)->first();

        if(!$userInfo){
            return back()->with('fail', 'Email incorrect');
        }else{
            if(HASH::check($request->password, $userInfo->password)){
                session(['LoggedUser' => $userInfo->id]);
                // $request->session()->put('LoggedUser', $userInfo->Id);
                return redirect('dashboard/');
            }else{
                return back()->with('fail', 'Mot de passe Incorrect');
            }
        }
    }
 
    // un logout customise
    function logout(Request $request){

        // Auth::logout();
        // return redirect('/home');
        if(session()->has('LoggedUser')){
            session()->pull('loggedUser');
            $request->session()->invalidate();
            return redirect('/home');
        }
    }
    function dashboard(){
        $data = ['LoggedUser'=> User::where('id','=', session('LoggedUser'))->first()];
        return view('dashboard/index', $data);
    }

    
}
