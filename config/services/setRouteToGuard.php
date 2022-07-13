<?php

use App\Contract\Services\RouteToGuard\SetRouteToGuardServiceContract as Contract;
use App\Services\SetRouteToGuardService as Service;

?>
<?php
return [
    'alias'=>'routeToGuard' ,
    'contract' => Contract::class ,
    'service' => Service::class ,
    'isSingleton'=> true ,
];
