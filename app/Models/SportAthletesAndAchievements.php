<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SportAthletesAndAchievements extends Model
{
    use HasFactory;

    protected $table = 'sport_athletes_and_achievements';

    protected $fillable = [
        'year',
        'pdf_url'
    ];
}