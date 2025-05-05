<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Nodes extends Model
{
    /** @use HasFactory<\Database\Factories\NodesFactory> */
    use HasFactory;

    protected $fillable = ['name', 'lat', 'lng'];
}
