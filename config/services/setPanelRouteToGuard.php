<?php

use App\Contract\Services\RouteToGuard\SetPanelRouteToGuardServiceContract as Contract;
use App\Services\SetPanelRouteToGuardService as Service;

?>
<?php
return [
    'alias'=>'panelRouteToGuard' ,
    'contract' => Contract::class ,
    'service' => Service::class ,
    'isSingleton'=> true ,
];
