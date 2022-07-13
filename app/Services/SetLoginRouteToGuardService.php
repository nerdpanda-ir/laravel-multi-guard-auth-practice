<?php

namespace App\Services;
use App\Contract\Services\RouteToGuard\SetPanelRouteToGuardServiceContract as Contract;
use App\Contract\Services\RouteToGuard\SetRouteToGuardServiceContract;

class SetLoginRouteToGuardService implements Contract
{
    protected SetRouteToGuardServiceContract $setRouteToGuardService;
    public function __construct(SetRouteToGuardServiceContract $setRouteToGuardService)
    {
        $this->setRouteToGuardService = $setRouteToGuardService ;
    }
    public function set(string|null $guard): void {
        $this->setRouteToGuardService->set($guard,'login');
    }
}
