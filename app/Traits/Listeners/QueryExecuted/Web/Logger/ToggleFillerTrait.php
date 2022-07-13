<?php

namespace App\Traits\Listeners\QueryExecuted\Web\Logger;

trait ToggleFillerTrait
{
    public function fillToggle():void{
        $this->toggle = config('queryExecuted.onWeb.logger');
    }
}
