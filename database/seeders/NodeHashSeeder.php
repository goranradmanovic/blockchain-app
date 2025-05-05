<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\NodeHash;

class NodeHashSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        NodeHash::factory()->count(100)->create();
    }
}
