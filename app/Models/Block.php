<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Block extends Model
{
    protected $fillable = [
        'total',
        'day',
        'time',
        'hour'
    ];
}
