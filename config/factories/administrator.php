<?php
    use App\Contract\Database\Factories\AdministratorFactoryContract as Contract ;
    use Database\Factories\AdministratorFactory as Factory;
?>
<?php
return [
    'alias'=> 'factory.administrator' ,
    'contract'=> Contract::class ,
    'factory' => Factory::class ,
    'isSingleton' => true
];
?>
