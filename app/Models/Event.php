<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class Event extends Model
{
    use HasFactory;
    use Notifiable;
    protected $fillable = ['event_name', 'date', 'participant_details', 'venue', 'organizer_details'];
}
