<?php

namespace App\Providers;

use Illuminate\Contracts\Support\DeferrableProvider;
use Illuminate\Support\ServiceProvider;

class AdministratorFactoryServiceProvider extends ServiceProvider implements DeferrableProvider
{
    protected string $alias;
    protected string $contract;
    protected string $factory ;
    protected bool $isSingleton;
    public function __construct($app)
    {
        parent::__construct($app);
        $this->alias = config('factories.administrator.alias');
        $this->contract = config('factories.administrator.contract');
        $this->factory = config('factories.administrator.factory');
        $this->isSingleton = config('factories.administrator.isSingleton');

    }
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->alias($this->contract , $this->alias);
        $this->app->bind($this->contract , $this->factory , $this->isSingleton);
    }

    public function provides():array
    {
        return [
            $this->alias , $this->contract ,
        ];
    }
}
