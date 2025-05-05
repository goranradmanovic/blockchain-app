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
        Schema::create('node_hashes', function (Blueprint $table) {
            $table->id();
            $table->string('address_hash', length: 64);
            $table->string('stake_hash', length: 64);
            $table->string('type');
            $table->string('location');
            $table->float('availability');
            $table->boolean('status')->default(false);
            $table->dateTime('last_seen');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('node_hashes');
    }
};
