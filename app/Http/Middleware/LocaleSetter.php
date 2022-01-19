<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class LocaleSetter
{
    public function handle(Request $request, Closure $next)
    {
        ray($request);

        if ($request->getHost() == 'organisation_es.test') {
            app()->setLocale('es');
        }

        return $next($request);
    }
}
