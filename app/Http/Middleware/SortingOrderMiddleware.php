<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class SortingOrderMiddleware
{
    public function handle(Request $request, Closure $next)
    {
        if (Auth::user()->permissions()->find(3)) {
            return $next($request);
        }
        return abort(403);
    }
}