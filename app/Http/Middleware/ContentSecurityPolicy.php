<?php

namespace App\Http\Middleware;

use Closure;

class ContentSecurityPolicy
{
    public function handle($request, Closure $next)
    {
        $response = $next($request);

        $csp = "default-src 'self'; "
            . "script-src 'self' 'unsafe-inline' 'unsafe-eval' https://cdn.jsdelivr.net https://ajax.googleapis.com https://unpkg.com https://www.gstatic.com https://www.googletagmanager.com; "
            . "style-src 'self' 'unsafe-inline' https://cdn.jsdelivr.net https://cdn.datatables.net https://unpkg.com https://fonts.googleapis.com; "
            . "img-src 'self' data: https://egspec.blob.core.windows.net;"
            . "font-src 'self' https://fonts.gstatic.com https://cdn.jsdelivr.net; "
            . "connect-src 'self' https://trusted-api.example.com; "
            . "frame-ancestors 'none'; "
            . "object-src 'none'; "
            . "form-action 'self'; "
            . "base-uri 'self'; "
            . "media-src 'self'; "
            . "child-src 'self'; "
            . "frame-src https://www.googletagmanager.com;";

        $response->headers->set('Content-Security-Policy', $csp);

        return $response;
    }
}