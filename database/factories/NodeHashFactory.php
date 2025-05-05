<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\NodeHash>
 */
class NodeHashFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'address_hash' => fake()->regexify('[0-9]{6}[a-z]{2}[0-9]{3}[a-z]{27}[0-9]{26}'), 
            'stake_hash' => fake()->regexify('[0-9]{6}[a-z]{2}[0-9]{3}[a-z]{27}[0-9]{26}'), 
            'type' => fake()->word(), 
            'location' => fake()->city, 
            'availability' => fake()->randomFloat(1, 1, 100), 
            'status' => fake()->boolean(), 
            'last_seen' => fake()->dateTimeBetween('-1 year', 'now')
        ];
    }
}
