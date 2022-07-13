<?php

namespace App\Contract\Services\QueryExecuted;

use Illuminate\Database\Events\QueryExecuted;

interface LoggerContract
{
    public function log(QueryExecuted $event):void;
}
