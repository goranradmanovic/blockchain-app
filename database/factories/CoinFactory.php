<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Coin>
 */
class CoinFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'ethPerXE' => fake()->randomFloat(4),
            'usdPerXE' => fake()->randomFloat(4),
            'date' => fake()->dateTimeBetween('-1 year', 'now')
        ];
    }
}
