<?php

namespace App\Http\Middleware;

use Closure;

class AdminAuthenticate
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    

    public function handle($request, Closure $next,$guards = 'admin')
    {
        // $this->authenticate($guards);
        if(!Auth::guard($guard)->check()){
            return redirect('admin/login');
        }

        return $next($request);
    }

}
