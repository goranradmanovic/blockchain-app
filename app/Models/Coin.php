<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Coin extends Model
{
    /** @use HasFactory<\Database\Factories\CoinFactory> */
    use HasFactory;

    protected $fillable = ['ethPerXE', 'usdPerXE', 'date'];
}
