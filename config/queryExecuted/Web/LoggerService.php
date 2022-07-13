<?php
 use App\Contract\Services\QueryExecuted\Web\LoggerContract as Contract;
 use App\Services\QueryExecuted\Web\Logger as Service;
?>
<?php
return [
    'contract' => Contract::class,
    'alias' => 'queryExecuted.web.logger',
    'service' => Service::class,
    'isSingleton'=>true ,
];
