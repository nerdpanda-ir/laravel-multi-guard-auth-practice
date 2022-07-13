<?php

namespace App\Listeners\QueryExecuted\Console;

use App\Contract\Listeners\QueryExecuted\Console\Contract;
use Illuminate\Database\Events\QueryExecuted;

class Listener implements Contract
{
    /**
     * Create the event listener.
     *
     * @return void
     */
    public function __construct()
    {
        //
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
    }
}
