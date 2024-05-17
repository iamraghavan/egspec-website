<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class WomenEmpowermentCellMember extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'role',
        'department',
        'program_name',
        'date',
        'beneficiaries',
    ];
}
