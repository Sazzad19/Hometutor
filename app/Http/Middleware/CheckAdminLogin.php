<?php

namespace App\Http\Middleware;

use Closure;

class CheckAdminLogin
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
             if(!(session()->get('userrole')=='admin')){
            return redirect()->route('admin.loginform');
          }
        return $next($request);
    }
}
