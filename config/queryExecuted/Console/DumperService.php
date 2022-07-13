<?php
 use App\Contract\Services\QueryExecuted\Console\DumperContract as Contract;
 use App\Services\QueryExecuted\Console\Dumper as Service;
?>
<?php
return [
    'contract' => Contract::class,
    'alias' => 'queryExecuted.console.dumper',
    'service' => Service::class,
    'isSingleton'=>true ,
];
