<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class NssAndRRC extends Model
{
    use HasFactory;

    protected $table = 'nss_and_red_ribbon_club';

    protected $fillable = [
        'year',
        'pdf_url'
    ];
}
