<?php

namespace App\Facades;

use App\Services\QueryExecuted\QueryExecutedService;
use Illuminate\Database\Events\QueryExecuted;
use Illuminate\Support\Facades\Facade;

/**
 * @see QueryExecutedService
 * @method static toArray(QueryExecuted $event):array
 */
class QueryExecutedFacade extends Facade
{
    public static function getFacadeAccessor():string {
        return config('queryExecuted.service.alias');
    }
}
