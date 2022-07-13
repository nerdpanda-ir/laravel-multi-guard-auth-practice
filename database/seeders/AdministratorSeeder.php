<?php

namespace Database\Seeders;

use App\Contract\Database\Factories\AdministratorFactoryContract;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class AdministratorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(AdministratorFactoryContract $factory)
    {
        $factory->newModel()->truncate();
        $factory->admin()->create();
    }
}
