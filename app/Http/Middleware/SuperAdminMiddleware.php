<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class SuperAdminMiddleware
{
    public function handle(Request $request, Closure $next)
    {
        if (Auth::user()->role->name == 'superAdmin') {
            return $next($request);
        }
        Auth::logout();
        return redirect(url('/'));
    }
}