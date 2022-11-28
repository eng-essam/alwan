<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminMiddleware
{
    public function handle(Request $request, Closure $next)
    {
        if (Auth::user()->role->name == 'superAdmin' or Auth::user()->role->name == 'admin') {
            return $next($request);
        }
        Auth::logout();
        return redirect(url('/'));
    }
}