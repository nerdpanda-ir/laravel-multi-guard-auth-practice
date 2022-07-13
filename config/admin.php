<?php

use App\Contract\Models\Adminable as Contract;
use App\Models\Administrator as Model;

?>
<?php
return [
    'alias'=>'user' ,
    'contract' => Contract::class ,
    'service' => Model::class ,
    'isSingleton'=> false ,
];
