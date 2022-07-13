<?php

namespace App\Services\QueryExecuted\Web;

use App\Contract\Services\QueryExecuted\Web\LoggerContract;
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
