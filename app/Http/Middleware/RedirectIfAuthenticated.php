<?php

namespace App\Http\Middleware;

use App\Contract\Services\RouteToGuard\SetPanelRouteToGuardServiceContract;
use Closure;
use Dflydev\DotAccessData\Data;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class RedirectIfAuthenticated
{
    protected  SetPanelRouteToGuardServiceContract $panelRouteToGuardService;
    public function __construct(SetPanelRouteToGuardServiceContract $panelRouteToGuardService){
        $this->panelRouteToGuardService = $panelRouteToGuardService ;
    }

    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @param  string|null  ...$guards
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle(Request $request, Closure $next, ...$guards)
    {
        $guards = empty($guards) ? [null] : $guards;

        foreach ($guards as $guard) {
            $guardObject = Auth::guard($guard);
            $this->panelRouteToGuardService->set($guard);
            if ($guardObject->check())
                return redirect($guardObject->routes['panel']);
        }

        return $next($request);
    }
}
