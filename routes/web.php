<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\VoteController;

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

// les route ci desous sont juste des prototypes

Route::get("/sign", function(){
    return view("home.signin-signup");
});

Route::prefix('/dashboard')->group(function(){

    Route::get('/', function(){
        return view("dashboard.index");
    });

    Route::get('/actualite', function(){
        return view("dashboard.actualite");
    });

    Route::resource('/vote', VoteController::class);
});