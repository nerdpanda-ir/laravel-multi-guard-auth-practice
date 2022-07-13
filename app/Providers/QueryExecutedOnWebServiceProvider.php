<?php

namespace App\Providers;

use Illuminate\Database\Events\QueryExecuted;
use Illuminate\Events\Dispatcher;
use Illuminate\Support\ServiceProvider;

class QueryExecutedOnWebServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot(Dispatcher $event):void
    {
        if (!$this->app->runningInConsole()) {
            $listeners = config('queryExecuted.onWeb.listeners') ;
            foreach ($listeners as $listener)
                $event->listen(QueryExecuted::class,$listener);
        }

    }
}
