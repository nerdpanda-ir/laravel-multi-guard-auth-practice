<?php

namespace App\Services\QueryExecuted\Console;

use App\Contract\Services\QueryExecuted\Console\LoggerContract;
use Illuminate\Database\Events\QueryExecuted;
use Illuminate\Support\Facades\Log;

class Logger implements LoggerContract
{
    public function log(QueryExecuted $event): void
    {
        dump(__CLASS__);
        Log::debug(__CLASS__,queryExecutedToArray($event));
    }
}
