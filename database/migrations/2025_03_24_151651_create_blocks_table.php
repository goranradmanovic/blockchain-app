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
        Schema::create('blocks', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('total');
            $table->bigInteger('day');
            $table->integer('time');
            $table->decimal('hour', 8, 2);
            $table->timestamps();
        });

        DB::table('blocks')->insert([
            'total' => 182114500000000,
            'day' => 130600000000,
            'time' => 66,
            'hour' => 54.42,
            'created_at' => now(),
            'updated_at' => now(),
        ]);
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('blocks');
    }
};
