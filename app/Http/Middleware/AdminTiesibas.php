<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;

class AdminTiesibas
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
        if(Auth::check()){

            if($request->user()->irAdmin())
            {
                return $next($request);
            }
            else
            {

                \Session::flash('flash_zina','Nav adminitratora pieļuves tiesību!');
                return redirect('/raksti');
            }

        }
        else
        {
            return redirect('/login');

        }
    }
}
