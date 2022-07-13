<?php

namespace App\Listeners\QueryExecuted\Web;

use App\Contract\Listeners\QueryExecuted\Web\LoggerContract;
use App\Traits\Listeners\QueryExecuted\Web\Logger\ToggleableTrait;
use Illuminate\Database\Events\QueryExecuted;
use Illuminate\Support\Facades\Log;
use \App\Contract\Services\QueryExecuted\Web\LoggerContract as LoggerServiceContract;

class LoggerListener implements LoggerContract
{
    use ToggleableTrait;
    protected bool $toggle;
    protected LoggerServiceContract $logger ;
    /**
     * Create the event listener.
     *
     * @return void
     */
    public function __construct(LoggerServiceContract $logger)
    {
        $this->fillToggle();
        $this->logger = $logger;
    }

    /**
     * Handle the event.
     *
     * @param  object  $event
     * @return void
     */
    public function handle(QueryExecuted $event):void
    {
        #dump(__CLASS__);
        //@todo callable this ....
        /*if ($this->toggle)
            Log::debug(__CLASS__,queryExecutedToArray($event));*/
        //==================
        if ($this->toggle)
            $this->logger->log($event);
    }
}
