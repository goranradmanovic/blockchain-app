<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\TransactionHash>
 */
class TransactionHashFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'date' => fake()->dateTimeBetween('-2 month', 'now'),
            'tx_hash' => fake()->regexify('[0-9]{6}[a-z]{2}[0-9]{3}[a-z]{27}[0-9]{26}'), 
            'from' => fake()->regexify('[0-9]{6}[a-z]{2}[0-9]{3}[a-z]{27}[0-9]{26}'), 
            'to' => fake()->regexify('[0-9]{6}[a-z]{2}[0-9]{3}[a-z]{27}[0-9]{26}'), 
            'memo' => fake()->sentences(3, true),
            'status' => fake()->boolean(),
            'amount' => fake()->randomNumber(6, true)
        ];
    }
}
