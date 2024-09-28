<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class WomenEmpowermentCellMember extends Model
{
    use HasFactory;
    use Notifiable;

    protected $fillable = [
        'name',
        'role',
        'department',
        'program_name',
        'date',
        'beneficiaries',
    ];
}
