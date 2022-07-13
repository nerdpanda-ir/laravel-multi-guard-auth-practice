<?php

namespace App\Listeners\QueryExecuted\Web;

use App\Contract\Listeners\QueryExecuted\Web\DumperContract;
use App\Traits\Listeners\QueryExecuted\Web\Dumper\ToggleableTrait;
use Illuminate\Database\Events\QueryExecuted;
use \App\Contract\Services\QueryExecuted\Web\DumperContract as DumperServiceContract ;

class DumperListener implements DumperContract
{
    use ToggleableTrait;

    protected bool $toggle;
    protected DumperServiceContract $dumper;
    /**
     * Create the event listener.
     *
     * @return void
     */
    public function __construct(DumperServiceContract $dumper)
    {
        $this->fillToggle();
        $this->dumper = $dumper;
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
        /*if ($this->toggle)
            dump(queryExecutedToArray($event));*/
        if ($this->toggle)
            $this->dumper->dump($event);
    }
}
