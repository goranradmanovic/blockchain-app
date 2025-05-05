<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('earnings', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('all_time_num');
            $table->bigInteger('all_time_amount');
            $table->bigInteger('last_24h_num');
            $table->bigInteger('last_24h_amount');
            $table->timestamps();
        });

        DB::table('earnings')->insert([
            'all_time_num' => 171853,
            'all_time_amount' => 3542737330971,
            'last_24h_num' => 100,
            'last_24h_amount' => 1797533620,
            'created_at' => now(),
            'updated_at' => now(),
        ]);
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('earnings');
    }
};
