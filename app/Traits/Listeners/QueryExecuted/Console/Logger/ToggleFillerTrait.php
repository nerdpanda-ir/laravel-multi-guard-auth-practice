<?php

namespace App\Traits\Listeners\QueryExecuted\Console\Logger;

trait ToggleFillerTrait
{
    public function fillToggle():void{
        $this->toggle = config('queryExecuted.onConsole.logger');
    }
}
