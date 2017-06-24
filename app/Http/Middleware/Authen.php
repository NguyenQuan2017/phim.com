<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;

class Authen
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    private $user;

    public function handle($request, Closure $next,$guard='web')
    {   
       


        if(!Auth::guard($guard)->check()){

            return redirect()->route('/');
        }
        $this->user = Auth::user();
        view()->share('user', $this->user);
        return $next($request);

    }


}
