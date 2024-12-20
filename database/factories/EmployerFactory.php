<?php

namespace Database\Factories;

use App\Models\employer;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<employer>
 */
class EmployerFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name' => fake()->name(),
            'logo' => fake()->imageUrl(),
            'user_id' => User::factory(),
        ];
    }
}
