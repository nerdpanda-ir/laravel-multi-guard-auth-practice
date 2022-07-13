<?php

namespace App\Listeners\QueryExecuted;

use App\Contract\Listeners\QueryExecuted\GlobalLoggerContract;
use App\Traits\Listeners\QueryExecuted\GlobalLogger\ToggleableTrait;
use Illuminate\Database\Events\QueryExecuted;
use Illuminate\Support\Facades\Log;

class GlobalLoggerListener
 implements GlobalLoggerContract
{
    use ToggleableTrait;
    protected bool $toggle;
    /**
     * Create the event listener.
     *
     * @return void
     */
    public function __construct()
    {
        $this->fillToggle();
    }

    /**
     * Handle the event.
     *
     * @param  object  $event
     * @return void
     */
    public function handle(QueryExecuted $event):void {
        if ($this->getToggle()){
            dump(__CLASS__);
            Log::debug(
                __CLASS__ , queryExecutedToArray($event)
            );
        }
    }
}
