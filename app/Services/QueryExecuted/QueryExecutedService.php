<?php

namespace App\Services\QueryExecuted;
use App\Contract\Services\QueryExecuted\ServiceContract as Contract;
use Illuminate\Database\Events\QueryExecuted;

class QueryExecutedService implements Contract
{
    public function toArray(QueryExecuted $event): array
    {
        return (array)$event;
    }
}
