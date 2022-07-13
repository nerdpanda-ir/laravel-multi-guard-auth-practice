<?php

namespace App\Traits\Listeners\QueryExecuted\GlobalDumper;

trait ToggleFillerTrait
{
    public function fillToggle():void {
        $this->toggle = config(
            'queryExecuted.globalDumperListener.on'
        );
    }
}
