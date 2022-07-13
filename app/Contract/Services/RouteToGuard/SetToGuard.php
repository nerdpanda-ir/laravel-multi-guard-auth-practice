<?php

namespace App\Contract\Services\RouteToGuard;

interface SetToGuard
{
    public function set(string|null $guard):void;
}
