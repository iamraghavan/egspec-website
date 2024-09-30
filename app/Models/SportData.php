<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SportData extends Model
{
    use HasFactory;

    protected $table = 'sport_data';

    protected $fillable = [
        'year',
        'event',
        'venue',
        'achieved',
    ];
}
