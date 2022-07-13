<?php

namespace App\Facades;
use App\Contract\Services\RouteToGuard\SetPanelRouteToGuardServiceContract as Contract;
use App\Contract\Services\RouteToGuard\SetRouteToGuardServiceContract;
use App\Services\SetLoginRouteToGuardService;
use Illuminate\Support\Facades\Facade;
/**
 * @see SetLoginRouteToGuardService
 * @method static void set(string|null $guard)
 * */
class SetLoginRouteToGuardFacade extends Facade {
    protected static function getFacadeAccessor():string
    {
        return config('services.setLoginRouteToGuard.alias');
    }
}
