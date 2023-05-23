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

Route::get("/dashboard", function(){
    return view("dashboard.dashboard");
});

// Route::get("/sign", [MainController::class, 'login']);
Route::get("/home/signin-signup", [MainController::class, 'register'])->name('home.signin-signup');
Route::post("/home/save", [MainController::class, 'save'])->name('home.save');

Route::get('/vote', function(){
    return view("vote.actualite");
})->name('vote');

