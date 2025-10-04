<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\login>
 */
class RegisterFactory extends Factory
{
    public function definition(): array
    {
        return [
            'username' => $this->faker->userName(),
            'email'    => $this->faker->unique()->safeEmail(),
            'password' => bcrypt('password'),
            'role'     => $this->faker->randomElement(['user', 'admin'])
        ];
    }
}
