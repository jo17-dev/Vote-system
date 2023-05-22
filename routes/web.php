<?php

use Illuminate\Support\Facades\Route;

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

Route::get("/dashboard", function(){
    return view("dashboard.dashboard");
});

Route::get("/sign", function(){
    return view("home.signin-signup");
});

Route::get('/vote', function(){
    return view("vote.actualite");
})->name('vote');