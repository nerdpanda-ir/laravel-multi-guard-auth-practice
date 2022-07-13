<?php
 use App\Contract\Services\QueryExecuted\Console\LoggerContract as Contract;
 use App\Services\QueryExecuted\Console\Logger as Service;
?>
<?php
return [
    'contract' => Contract::class,
    'alias' => 'queryExecuted.console.logger',
    'service' => Service::class,
    'isSingleton'=>true ,
];
