<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Newsletter extends Model
{
    use HasFactory;
    protected $table = 'newsletters';

    protected $fillable = [
        'title',
        'slug',
        'summary_description',
        'keywords',
        'content',
        'thumbnail',
        'department_id',
        'publish_status',
        'author_id',
    ];
}
