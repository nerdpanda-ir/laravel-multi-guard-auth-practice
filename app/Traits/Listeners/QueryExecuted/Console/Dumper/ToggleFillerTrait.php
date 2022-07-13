<?php

namespace App\Traits\Listeners\QueryExecuted\Console\Dumper;

trait ToggleFillerTrait
{
    public function fillToggle():void{
        $this->toggle = config('queryExecuted.onConsole.dumper');
    }
}
