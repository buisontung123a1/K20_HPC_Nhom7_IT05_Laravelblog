<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class loginadmin
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
        if ($request -> input('token') == '123') {
            return redirect('dashboard');
        }
        else return redirect('/');
        return $next($request);
    }
}
