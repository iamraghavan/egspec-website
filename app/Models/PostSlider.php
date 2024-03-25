<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PostSlider extends Model
{
    use HasFactory;

    protected $table = 'post_sliders';

    protected $fillable = [
        'page_name',
        'desktop_image_url',
        'mobile_image_url',
        'href_link',
        'alt_name',
    ];
}
