<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Revenue extends Model
{
    /** @use HasFactory<\Database\Factories\RevenueFactory> */
    use HasFactory;

    protected $fillable = ['amount', 'date'];
}
