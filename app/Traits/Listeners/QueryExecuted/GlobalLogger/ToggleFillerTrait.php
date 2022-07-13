<?php

namespace App\Traits\Listeners\QueryExecuted\GlobalLogger;

trait ToggleFillerTrait
{
    public function fillToggle():void {
        $this->toggle = config(
            'queryExecuted.globalLoggerListener.on'
        );
    }
}
