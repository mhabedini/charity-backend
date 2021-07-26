<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpKernel\Exception\AccessDeniedHttpException;

class ApiRole
{
    /**
     * Handle an incoming request.
     *
     * @param \Illuminate\Http\Request $request
     * @param \Closure $next
     * @param array $roles
     * @return mixed
     */
    public function handle(Request $request, Closure $next, ...$roles)
    {
        $user = user();

        if ($user->isAdmin()) {
            return $next($request);
        } else if ($user->hasRoles($roles)) {
            return $next($request);
        }
        throw new AccessDeniedHttpException();
    }
}
