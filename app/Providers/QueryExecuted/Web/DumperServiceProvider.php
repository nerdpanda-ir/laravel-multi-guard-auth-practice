<?php

namespace App\Providers\QueryExecuted\Web;

use Illuminate\Contracts\Support\DeferrableProvider;
use Illuminate\Support\ServiceProvider;

class DumperServiceProvider extends ServiceProvider implements DeferrableProvider
{
    protected string $contract;
    protected string $alias;
    protected string $service;
    protected bool $isSingleton;

    public function __construct($app)
    {
        parent::__construct($app);
        $this->contract = config(
            'queryExecuted.Web.DumperService.contract'
        );
        $this->alias = config('queryExecuted.Web.DumperService.alias');
        $this->service = config(
            'queryExecuted.Web.DumperService.service'
        );
        $this->isSingleton = config(
            'queryExecuted.Web.DumperService.isSingleton'
        );
    }

    /**
     * Register services.
     *
     * @return void
     */
    public function register():void
    {
        if (!$this->app->runningInConsole()){
            $this->app->alias($this->contract,$this->alias);
            $this->app->bind(
                $this->contract , $this->service , $this->isSingleton
            );
        }
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }
    public function provides():array
    {
        return [
            $this->alias , $this->contract , $this->service
        ];
    }
}
