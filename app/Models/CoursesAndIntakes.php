<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CoursesAndIntakes extends Model
{
    use HasFactory;

    protected $fillable = [
        'course_name',
        'course_type',
        'intake',
    ];
}
