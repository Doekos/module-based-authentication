<?php

namespace App\Modules\Authentication\Http\Middleware;

use Closure;
use Illuminate\Routing\Controllers\Middleware;

class Authenticate extends Middleware
{
    public function handle($request, Closure $next, ...$guards)
    {
        if (!auth()->check()) {
            dd('User is not authenticated');
        }

        return $next($request);
    }

}
