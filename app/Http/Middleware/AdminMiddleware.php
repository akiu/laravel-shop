<?php

namespace App\Http\Middleware;

use Closure;
use Auth;

class AdminMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        if(Auth::check()) {

            $user = Auth::user();
            
            if(!$user->hasRole('admin')) {
                return redirect()->route('home');
            }

        } else {

            return redirect()->route('home');
        }
        
        return $next($request);
    }
}
