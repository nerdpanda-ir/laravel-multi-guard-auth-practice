<?php

namespace App\Contract\Services\QueryExecuted;

use Illuminate\Database\Events\QueryExecuted;

interface ToArray
{
    public function toArray(QueryExecuted $event):array;
}
