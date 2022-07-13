<?php

namespace Database\Factories;

use App\Contract\Database\Factories\UserFactoryContract;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Carbon;
use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\User>
 */
class UserFactory extends Factory implements UserFactoryContract
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

    /**
     * Indicate that the model's email address should be unverified.
     *
     * @return static
     */
    public function unverified()
    {
        return $this->state(function (array $attributes) {
            return [
                'email_verified_at' => null,
            ];
        });
    }
    public function panda():Factory {
        $data = [
            'name'=> 'nerdPanda' ,
            'email' => 'nerdPanda@nerdpanda.ir' ,
            'password' => \Hash::make('nerdPanda') ,
            'created_at' => Carbon::now()->subYears(4) ,
            'email_verified_at' => Carbon::now()->subYears(4)->addMinutes(10) ,
            'updated_at' => Carbon::now()->subYears(4)->addMinutes(10) ,
        ];
        return $this->state($data);
    }
}
