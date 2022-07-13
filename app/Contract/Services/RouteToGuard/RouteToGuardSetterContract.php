<?php

namespace App\Contract\Services\RouteToGuard;

interface RouteToGuardSetterContract
{
    public function set(string|null $guard , string $routeType ):void;
}
