<?php

use App\Contract\Services\RouteToGuard\SetLoginRouteToGuardServiceContract as Contract;
use App\Services\SetLoginRouteToGuardService as Service;

?>
<?php
return [
    'alias'=>'panelRouteToGuard' ,
    'contract' => Contract::class ,
    'service' => Service::class ,
    'isSingleton'=> true ,
];
