<?php

use App\Listeners\QueryExecuted\GlobalDumperListener;
use App\Listeners\QueryExecuted\GlobalLoggerListener;
use App\Listeners\QueryExecuted\Web\Listener;
use App\Listeners\QueryExecuted\Web\LoggerListener;
use App\Listeners\QueryExecuted\Web\DumperListener;
?>
<?php
return [
    'logger'=> false  ,
    'dumper'=> false ,
    'listeners' => [
        Listener::class ,
        /*======= globally for all environments =======*/
        GlobalDumperListener::class ,
        GlobalLoggerListener::class ,
        /*======= globally for all environments =======*/

        /*======= listeners only for web =======*/
        LoggerListener::class ,
        DumperListener::class ,
        /*======= listeners only for web =======*/
    ]
];
