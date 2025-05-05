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
        Schema::create('transaction_hashes', function (Blueprint $table) {
            $table->id();
            $table->dateTime('date');
            $table->string('tx_hash', length: 64);
            $table->string('from', length: 64);
            $table->string('to', length: 64);
            $table->string('memo');
            $table->string('status');
            $table->bigInteger('amount');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('transaction_hashes');
    }
};
