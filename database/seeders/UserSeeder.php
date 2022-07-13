<?php

namespace Database\Seeders;

use App\Contract\Database\Factories\UserFactoryContract;
use Database\Factories\UserFactory;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(UserFactoryContract $factory)
    {
        /** @var UserFactory $factory */
        $factory->newModel()->truncate();
        $factory->panda()->create();
    }
}
