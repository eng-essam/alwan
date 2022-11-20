<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;

class LangWebMiddleware
{
    public function handle(Request $request, Closure $next)
    {
        $lang = $request->session()->get('lang');
        $lang = $lang ?? "ar";
        App::setLocale($lang);
        return $next($request);
    }
}
