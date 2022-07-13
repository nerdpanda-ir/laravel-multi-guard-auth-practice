<?php

namespace App\Listeners\QueryExecuted;

use App\Contract\Listeners\QueryExecuted\GlobalDumperContract;
use App\Contract\Services\QueryExecuted\ServiceContract;
use App\Traits\Listeners\QueryExecuted\GlobalDumper\ToggleableTrait;
use Illuminate\Database\Events\QueryExecuted;

class GlobalDumperListener
    implements GlobalDumperContract
{
    use ToggleableTrait;

    protected ServiceContract $queryExecutedService;
    protected bool $toggle;

    /**
     * Create the event listener.
     *
     * @return void
     */
    public function __construct(
        ServiceContract $queryExecutedService
    )
    {
        $this->queryExecutedService = $queryExecutedService;
        //@todo create toggleable class
        $this->fillToggle();
    }

    /**
     * Handle the event.
     *
     * @param object $event
     * @return void
     */
    public function handle(QueryExecuted $event): void
    {
        if ($this->getToggle())
            dump(
                __CLASS__,
                queryExecutedToArray($event),
            );
    }
}
