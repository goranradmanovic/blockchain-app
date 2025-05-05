<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TransactionHash extends Model
{
    /** @use HasFactory<\Database\Factories\TransactionHashFactory> */
    use HasFactory;

    protected $fillable = ['date', 'tx_hash', 'from', 'to', 'memo', 'status', 'amount'];
}
