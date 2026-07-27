<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class TokenMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  Closure(Request): (Response)  $next
     */
    public function handle(Request $request, Closure $next, string $token): Response
    {

        if ($request->header('token') !== $token) {
            return response()->json(['error' => 'Invalid token']);
        }

        return $next($request);
    }
}
