<?php

namespace App\Services;

use App\Contract\Services\RouteToGuard\SetRouteToGuardServiceContract;

class SetRouteToGuardService implements SetRouteToGuardServiceContract
{
    public function set(?string $guard, string $routeType): void
    {
        if (is_null($guard))
            $guard = config('auth.defaults.guard');
        $guardObject = auth()->guard($guard);
        if (!isset($guardObject->routes[$routeType]))
            $guardObject->routes[$routeType] = config("auth.guards.{$guard}.routes.{$routeType}");
    }
}
