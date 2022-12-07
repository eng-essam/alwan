<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ExecuteOrderMiddleware
{
    public function handle(Request $request, Closure $next)
    {
        if (Auth::user()->permissions()->find(4)) {
            return $next($request);
        }
        return abort(403);
    }
}