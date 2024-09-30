<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Equipment extends Model
{
    use HasFactory;
    protected $table = 'equipments';
    protected $primaryKey = 'equipment_id'; // Define the primary key field

    protected $fillable = [
        'category_id',
        'equipment_name',
    ];
}