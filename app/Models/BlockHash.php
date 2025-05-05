<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BlockHash extends Model
{
    /** @use HasFactory<\Database\Factories\BlockHashFactory> */
    use HasFactory;

    protected $fillable = ['height', 'block_hash', 'data_hash', 'ledger_hash', 'txs', 'total_xe', 'mined'];
}
