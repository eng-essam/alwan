<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class PasswordApiMiddleware
{
    public function handle(Request $request, Closure $next)
    {
        if ($request->header('Password') !== env('API_PASSWORD','12345678')) {
            return response()->json(
                ['message' => 'Api Password Incorrect.'], 401
            );
        }
        return $next($request);
    }
}
