<?php

namespace App\Traits\Listeners\QueryExecuted\Web\Dumper;

trait ToggleFillerTrait
{
    public function fillToggle():void{
        $this->toggle = config('queryExecuted.onWeb.dumper');
    }
}
