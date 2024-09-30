<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Route extends Model
{
    protected $fillable = ['route', 'operated_via', 'starting_time', 'total_km'];
}