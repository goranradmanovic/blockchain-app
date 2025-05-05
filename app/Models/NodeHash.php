<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class NodeHash extends Model
{
    /** @use HasFactory<\Database\Factories\NodeHashFactory> */
    use HasFactory;

    protected $fillable = ['address_hash', 'stake_hash', 'type', 'location', 'availability', 'status', 'last_seen'];
}
