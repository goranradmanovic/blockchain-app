<?php

namespace Database\Seeders;

use App\Models\Nodes;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class NodesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Nodes::factory()->count(12)->create();
    }
}
