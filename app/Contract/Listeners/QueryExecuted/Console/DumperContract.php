<?php

namespace App\Contract\Listeners\QueryExecuted\Console;

use App\Contract\Listeners\QueryExecuted\DumperContract as QueryExecutedDumperContract;
use App\Contract\Listeners\QueryExecuted\QueryExecutedContract;
use App\Contract\ToggleableContract;

interface DumperContract
extends QueryExecutedContract , QueryExecutedDumperContract ,
        Contract , ToggleableContract
{

}
