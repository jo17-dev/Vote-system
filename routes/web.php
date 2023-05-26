<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MainController;

use App\Http\Controllers\VoteController;
use App\Http\Controllers\SondageController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view("home/layout");
});

Route::get('/home/layout', function(){
    return view("home.layout");
});



// les route ci desous sont juste des prototypes

Route::get("/dashboard",[MainController::class, 'dashboard'])->name('dashboard');


// Routes a usage d'authentification -----------------------------------
Route::get("/sign", [MainController::class, 'login']);

Route::get("/sign", [MainController::class, 'register'])->name('home.signin-signup');

Route::resource('/vote', VoteController::class);

// });
Route::post("/home/save", [MainController::class, 'save'])->name('home.save');

Route::post("home/check", [MainController::class, 'check'])->name('home.check');

Route::post("home/logout", [MainController::class, 'logout'])->name('home.logout');

// ----------------------------------------------------------------------

Route::prefix('/dashboard')->group(function(){

    Route::get('/', function(){
        return view("dashboard.index");
    });

    Route::get('/actualite', function(){
        return view("dashboard.actualite");
    });

    Route::resource('/vote', VoteController::class);
    Route::get('/person-vote', [VoteController::class, 'person_vote_form']); // route pour le vote de candidat
});