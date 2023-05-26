<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthCheck
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle(Request $request, Closure $next)
    {

        // if(Auth::check()) {
        //     return redirect('/home');
        // }
        if(!session()->has('LoggedUser') && ($request->path() !='home/login' && $request->path() != '/sign')){
            return redirect('/sign')->with('fail', "vous devez d'abord vous connecter");
        }

        if(session()->has('LoggedUser') && ($request->path() == '/sign' || $request->path() == '/sign')){
            return back();
        }
        return $next($request)->header('Cache-Control', 'no-cache, no-store, max-age=0, must-revalidate')
        ->header('Pragma', 'no-cache')
        ->header('Expires', 'Sat, 01 jan 1990 00:00:00 GMT');
    }
}
