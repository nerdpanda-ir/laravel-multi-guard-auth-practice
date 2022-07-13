<?php

namespace App\Traits\Listeners\QueryExecuted\Console\Dumper;

use App\Traits\ToggleGetterTrait;
use App\Traits\ToggleSetterTrait;

trait ToggleableTrait
{
    use ToggleGetterTrait , ToggleSetterTrait , ToggleFillerTrait ;
}
