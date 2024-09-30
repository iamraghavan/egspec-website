<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OtherSessionsInfo extends Model
{
    use HasFactory;

    // Specify the table name if it's not the plural form of the model
    protected $table = 'other_sessions_info';

    // Define the fillable fields
    protected $fillable = [
        'ip_address',
        'request_timestamp',
        'timezone',
        'city',
        'asn',
        'name',
        'latitude_longitude',
    ];
}
