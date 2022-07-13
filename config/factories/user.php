<?php 
    use App\Contract\Database\Factories\UserFactoryContract as Contract ;
    use Database\Factories\UserFactory as Factory; 
?>
<?php 
return [
    'alias'=> 'factory.user' , 
    'contract'=> Contract::class , 
    'factory' => Factory::class , 
    'isSingleton' => true  
];
?>