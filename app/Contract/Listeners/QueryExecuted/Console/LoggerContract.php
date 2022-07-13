<?php

namespace App\Contract\Listeners\QueryExecuted\Console;

use App\Contract\Listeners\QueryExecuted\LoggerContract as QueryExecutedLoggerContract;
use App\Contract\Listeners\QueryExecuted\QueryExecutedContract;
use App\Contract\ToggleableContract;

interface LoggerContract extends
    QueryExecutedContract , QueryExecutedLoggerContract , Contract , ToggleableContract {

}
