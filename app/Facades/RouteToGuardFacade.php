<?php

namespace App\Facades;

use App\Services\SetRouteToGuardService;
use Illuminate\Support\Facades\Facade;
/**
 * @see SetRouteToGuardService
 * @method static void set(?string $guard, string $routeType)
 * */
class RouteToGuardFacade extends Facade
{
    public static function getFacadeAccessor():string {
        return config('services.setRouteToGuard.alias');
    }
}
