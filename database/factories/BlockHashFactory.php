<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\BlockHash>
 */
class BlockHashFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'height' => fake()->randomNumber(7, true), 
            'block_hash' => fake()->regexify('[0-9]{6}[a-z]{2}[0-9]{3}[a-z]{27}[0-9]{26}'), 
            'data_hash' => fake()->regexify('[0-9]{6}[a-z]{2}[0-9]{3}[a-z]{27}[0-9]{26}'), 
            'ledger_hash' => fake()->regexify('[0-9]{6}[a-z]{2}[0-9]{3}[a-z]{27}[0-9]{26}'), 
            'txs' => fake()->randomDigit(), 
            'total_xe' => fake()->randomDigit(), 
            'mined' => fake()->dateTimeBetween('-1 month', 'now')
        ];
    }
}
