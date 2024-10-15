<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class GzipCompression
{
    public function handle($request, Closure $next)
    {
        // Check if the browser accepts gzip encoding
        if (strpos($request->header('Accept-Encoding'), 'gzip') !== false) {
            ob_start("ob_gzhandler");
        } else {
            ob_start();
        }

        $response = $next($request);
        ob_end_flush();

        return $response;
    }
}
