<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Burn extends Model
{
    protected $fillable = [
        'last_30d_amount',
        'last_30d_count',
        'total_amount',
        'total_count'
    ];
}
