<?php
namespace Apsg\Zenboxer\Middlewares;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;

class HttpToHttpsRedirectMiddleware
{
    public function handle(Request $request, Closure $next)
    {
        if (!$request->secure() && App::environment('production')) {
            return redirect()->secure($request->getRequestUri(), 301);
        }

        return $next($request);
    }
}
