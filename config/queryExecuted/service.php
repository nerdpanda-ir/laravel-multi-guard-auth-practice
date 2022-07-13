<?php

use App\Contract\Services\QueryExecuted\ServiceContract as Contract;
use App\Services\QueryExecuted\QueryExecutedService as Service;

?>
<?php
return [
    'contract'=> Contract::class ,
    'alias'=>'queryExecutedService' ,
    'class'=> Service::class ,
    'isSingleton'=> true
];
