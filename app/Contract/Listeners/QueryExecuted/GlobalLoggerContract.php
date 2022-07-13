<?php

namespace App\Contract\Listeners\QueryExecuted;

use App\Contract\ToggleableContract;

interface GlobalLoggerContract extends QueryExecutedContract ,
    LoggerContract ,
    ToggleableContract
{

}
