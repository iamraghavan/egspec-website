<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class NewspaperCutout extends Model
{
    use HasFactory;

    protected $fillable = [
        'image_path',
        'department',
        'uploaded_by',
        'newspaper_name',
        'description',
        'date_of_publish'
    ];

    // Define the relationship to the user who uploaded the cutout
    public function user()
    {
        return $this->belongsTo(User::class, 'uploaded_by');
    }
}
