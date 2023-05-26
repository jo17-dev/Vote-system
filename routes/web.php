<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MainController;
use App\Http\Middleware\AuthCheck;
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

// Routes a usage d'authentification -----------------------------------
Route::get("/sign", [MainController::class, 'register'])->name('home.signin-signup');

Route::get("/sign", [MainController::class, 'login']);

Route::post("/home/save", [MainController::class, 'save'])->name('home.save');

Route::post("home/check", [MainController::class, 'check'])->name('home.check');

Route::get("home/logout", [MainController::class, 'logout'])->name('home.logout');

Route::get("/dashboard",[MainController::class, 'dashboard'])->name('dashboard');
// --------------------------------------------------------------------------

// here we can use middleware for more security
Route::middleware([AuthCheck::class])->group(function(){
    
    Route::prefix('/dashboard')->group(function(){

        Route::get('/actualite', function(){
            return view("dashboard.actualite");
        });
    
        Route::resource('/vote', VoteController::class);
    });
});
// ----------------------------------------------------------------------


