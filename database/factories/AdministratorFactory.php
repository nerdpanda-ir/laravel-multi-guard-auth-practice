<?php

namespace Database\Factories;

use App\Contract\Database\Factories\AdministratorFactoryContract;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Carbon;
use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Administrator>
 */
class AdministratorFactory extends Factory implements AdministratorFactoryContract
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'name' => $this->faker->name(),
            'email' => $this->faker->unique()->safeEmail(),
            'email_verified_at' => now(),
            'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
            'remember_token' => Str::random(10),
        ];
    }
    public function admin():Factory {
        $data = [
            'name'=> 'admin' ,
            'email' => 'admin@admin.ir' ,
            'password' => \Hash::make('admin') ,
            'created_at' => Carbon::now()->subYears(4)->subMinutes(35) ,
            'email_verified_at' => Carbon::now()->subYears(4)->addMinutes(45) ,
            'updated_at' => Carbon::now()->subYears(4)->addMinutes(45) ,
        ];
        return $this->state($data);
    }
}
