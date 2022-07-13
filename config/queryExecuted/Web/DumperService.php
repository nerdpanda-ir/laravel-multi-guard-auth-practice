<?php
 use App\Contract\Services\QueryExecuted\Web\DumperContract as Contract;
 use App\Services\QueryExecuted\Web\Dumper as Service;
?>
<?php
return [
    'contract' => Contract::class,
    'alias' => 'queryExecuted.web.dumper',
    'service' => Service::class,
    'isSingleton'=>true ,
];
