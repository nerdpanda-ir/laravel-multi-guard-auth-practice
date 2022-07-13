<?php

namespace App\Providers;

use Illuminate\Contracts\Support\DeferrableProvider;
use Illuminate\Support\ServiceProvider;

class SetPanelRouteToGuardServiceProvider extends ServiceProvider implements DeferrableProvider
{
    protected const PREFIX = 'services.setPanelRouteToGuard';
    protected string $alias;
    protected string $service;
    protected string $contract;
    protected bool $isSingleton;
    public function __construct($app) {
        parent::__construct($app);
        $this->alias = config(self::PREFIX.'.alias');
        $this->contract = config(self::PREFIX.'.contract');
        $this->service = config(self::PREFIX.'.service');
        $this->isSingleton = config(self::PREFIX.'.isSingleton');
    }

    /**
     * Register services.
     *
     * @return void
     */
    public function register():void {
        $this->app->alias($this->contract,$this->alias);
        $this->app->bind(
            $this->contract,$this->service,
            $this->isSingleton
        );
    }

    public function provides():array
    {
        return [
            $this->alias , $this->contract , $this->service
        ];
    }
}
