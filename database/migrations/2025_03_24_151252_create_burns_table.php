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
        Schema::create('burns', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('last_30d_amount');
            $table->integer('last_30d_count');
            $table->bigInteger('total_amount');
            $table->integer('total_count');
            $table->timestamps();
        });

        DB::table('burns')->insert([
            'last_30d_amount' => 35646694720,
            'last_30d_count' => 4,
            'total_amount' => 2555301679058,
            'total_count' => 528,
            'created_at' => now(),
            'updated_at' => now(),
        ]);
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('burns');
    }
};
