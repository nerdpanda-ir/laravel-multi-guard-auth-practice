<?php

namespace App\Contract\Services\QueryExecuted;

use Illuminate\Database\Events\QueryExecuted;

interface DumperContract
{
    public function dump(QueryExecuted $event):void;
}
