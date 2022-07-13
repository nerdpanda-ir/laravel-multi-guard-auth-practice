<?php

namespace App\Contract\Listeners\QueryExecuted;

use App\Contract\ToggleableContract;

interface GlobalDumperContract extends QueryExecutedContract ,
    DumperContract ,
    ToggleableContract
{

}
