<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Earning extends Model
{
    protected $fillable = [
        'all_time_num',
        'all_time_amount',
        'last_24h_num',
        'last_24h_amount'
    ];
}
