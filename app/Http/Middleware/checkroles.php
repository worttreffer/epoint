<?php

namespace App\Http\Middleware;

use Closure;

class checkroles
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next, ...$role)
    {
        if (! $request->user()->authorizeRoles($role)) {
            abort(401, 'Keine Berechtigung für diese Aktivität vorhanden.');
			// Redirect...
        }
		return $next($request);
    }
}
