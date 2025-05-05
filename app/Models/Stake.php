<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Stake extends Model
{
    protected $fillable = [
        'count',
        'staked_amount'
    ];
}
