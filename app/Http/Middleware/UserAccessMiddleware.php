<?php

namespace App\Http\Middleware;

use App\Models\User;
use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserAccessMiddleware
{
    public function handle(Request $request, Closure $next , $role)
    {

        if (Auth::user()->role->name == $role) {
            return $next($request);
        }
        Auth::logout();
        return redirect( url('/'));
    }
}
