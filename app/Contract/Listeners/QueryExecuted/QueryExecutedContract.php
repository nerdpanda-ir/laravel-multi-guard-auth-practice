<?php

namespace App\Contract\Listeners\QueryExecuted;

use Illuminate\Database\Events\QueryExecuted;

interface QueryExecutedContract
{
    public function handle(QueryExecuted $event):void;
}
