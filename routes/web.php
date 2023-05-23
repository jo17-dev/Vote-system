<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MainController;

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
    return redirect("/home");
});

Route::get('/home', function(){
    return view("home.layout");
});

Route::get('/profil', function(){
    return view("home.profil");
});

Route::get("/dashboard",[MainController::class, 'dashboard'])->name('dashboard');

// Routes a usage d'authentification -----------------------------------
 Route::get("/sign", [MainController::class, 'login']);

Route::get("/sign", [MainController::class, 'register'])->name('home.signin-signup');

Route::post("/home/save", [MainController::class, 'save'])->name('home.save');

Route::post("home/check", [MainController::class, 'check'])->name('home.check');

// ----------------------------------------------------------------------

Route::get('/vote', function(){
    return view("vote.actualite");
})->name('vote');

