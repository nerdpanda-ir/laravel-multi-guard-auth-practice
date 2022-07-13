<?php

namespace App\Services\QueryExecuted\Web;

use App\Contract\Services\QueryExecuted\Web\DumperContract;
use Illuminate\Database\Events\QueryExecuted;

class Dumper implements DumperContract
{
    public function dump(QueryExecuted $event): void
    {
        dump(__CLASS__,queryExecutedToArray($event));
    }
}
