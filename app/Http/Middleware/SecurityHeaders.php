<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class SecurityHeaders
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function handle(Request $request, Closure $next)
    {
        $response = $next($request);

        $response->headers->set('X-Frame-Options', 'DENY');
        $response->headers->set('X-Content-Type-Options', 'nosniff');
        $response->headers->set('Referrer-Policy', 'no-referrer');
        $response->headers->set('X-XSS-Protection', '1; mode=block');
        $response->headers->set('Strict-Transport-Security', 'max-age=63072000; includeSubDomains; preload');
        $response->headers->set('Permissions-Policy', 'geolocation=(), microphone=()');
        // CSP configurado para permitir recursos do Vite e fontes externas
        $csp = "default-src 'self'; " .
               "script-src 'self' 'unsafe-inline' 'unsafe-eval' http://localhost:5173 http://[::1]:5173 https://unpkg.com; " .
               "style-src 'self' 'unsafe-inline' http://localhost:5173 http://[::1]:5173 https://fonts.googleapis.com https://fonts.bunny.net; " .
               "font-src 'self' https://fonts.gstatic.com https://fonts.bunny.net; " .
               "img-src 'self' data: https://via.placeholder.com https://images.unsplash.com; " .
               "connect-src 'self' http://localhost:5173 http://[::1]:5173 ws://localhost:5173 ws://[::1]:5173;";
        
        $response->headers->set('Content-Security-Policy', $csp);

        return $response;
    }
} 