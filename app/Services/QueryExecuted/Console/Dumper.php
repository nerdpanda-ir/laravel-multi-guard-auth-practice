<?php

namespace App\Services\QueryExecuted\Console;

use App\Contract\Services\QueryExecuted\Console\DumperContract;
use Illuminate\Database\Events\QueryExecuted;

class Dumper implements DumperContract
{
    public function dump(QueryExecuted $event): void
    {
        $data = queryExecutedToArray($event);
        $data['connection'] = get_class($data['connection']);
        dump(__CLASS__,$data);
    }
}
