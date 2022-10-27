<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;

class langApiMiddleware
{
    public function handle(Request $request, Closure $next)
    {
        App::setLocale('en');
        if ($request->header('lang') == 'ar') {
            App::setLocale('ar');
        }
        return $next($request);
    }
}
