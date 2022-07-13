<?php

namespace App\Providers;

use Illuminate\Contracts\Support\DeferrableProvider;
use Illuminate\Support\ServiceProvider;

class QueryExecutedServiceProvider extends ServiceProvider implements DeferrableProvider
{
    protected string $contract;
    protected string $alias;
    protected string $service;
    protected bool $isSingleton;
    public function __construct($app)
    {
        parent::__construct($app);
        $this->contract = config('queryExecuted.service.contract');
        $this->alias = config('queryExecuted.service.alias');
        $this->service = config('queryExecuted.service.class');
        $this->isSingleton = config('queryExecuted.service.isSingleton');
    }

    /**
     * Register services.
     *
     * @return void
     */
    public function register():void
    {
        $this->app->alias($this->contract,$this->alias);
        $this->app->bind(
            $this->contract ,
            $this->service ,
            $this->isSingleton
        );
    }
    public function provides():array{
        return [
            $this->alias , $this->contract , $this->service
        ];
    }
}
