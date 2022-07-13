<?php

use App\Contract\Models\Userable as Contract;
use App\Models\User as Model;

?>
<?php
return [
    'alias'=>'user' ,
    'contract' => Contract::class ,
    'service' => Model::class ,
    'isSingleton'=> false ,
];
