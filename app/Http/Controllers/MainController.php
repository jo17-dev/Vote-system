<?php

namespace App\Http\Controllers;
session_start();

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
                // creattion de la session
                // $request->session()->put('LoggedUser', $userInfo->Id);
                // session('LoggedUser', $userInfo);
                // $_SESSION['LoggedUser'] = [
                //     $userInfo->id,
                //     $userInfo->nom,
                //     $userInfo->email
                // ];

                session([
                    'LoggedUser' => [
                        'id' => $userInfo->id,
                        'nom' => $userInfo->nom,
                        'email' => $userInfo->email
                    ]
                ]);
                return redirect('dashboard/');
            }else{
                return back()->with('fail', 'Mot de passe Incorrect');
            }
        } return back()->with('fail', 'Something went wrong !');
    }
 
    // un logout customise
    function logout(Request $request){

        // Auth::logout();
        // return redirect('/home');
        if(session()->has('LoggedUser')){
            session()->pull('loggedUser');
            $request->session()->invalidate();
            return redirect('/');
        }
        return redirect('/sign');
    }


    function dashboard(){
        $data = ['LoggedUser'=> User::where('id', session('LoggedUser'))->first()];
        return view('dashboard/index', $data);
    }

    function profil(){
        $data = ['LoggedUser'=> User::where('id','=', session('LoggedUser'))->first()];
        return view('home.profil', $data);
    }
    
    function update(Request $request, $id){
        
        $request->validate([
            'nom'=>'required',
            'email'=>'required',
            'oldPassword'=>'required'
        ]);
        
        $user = User::find($id);
        $user->nom = $request->input('nom');
        $user->email = $request->input('email');
        $user->password = Hash::make($request['newPassword']);
        $userInfo = User::where('password','=',$request->oldPassword)->first();
          $update = $user->update();

        if($userInfo == $request->oldPassword){ 
            
            $update = $user->update();
            
            $data = ['LoggedUser'=> User::where('id','=', session('LoggedUser'))->first()];

            return view('home.profil', $data)->with('success', "vos informations ont ete mis a jour avec succes!");
            
            }
            return back()->with('fail', "Ouuups ".$userInfo."Une Erreur s'est produite veuillez remplir tous les champs!");
            // return back()->with("sss".$request->input['newPassword']. "Nothing here ?");
    }

}
