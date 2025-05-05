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
        Schema::create('block_hashes', function (Blueprint $table) {
            $table->id();
            $table->integer('height');
            $table->string('block_hash', length: 64);
            $table->string('data_hash', length: 64);
            $table->string('ledger_hash', length: 64);
            $table->integer('txs');
            $table->integer('total_xe');
            $table->dateTime('mined');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('block_hashes');
    }
};
