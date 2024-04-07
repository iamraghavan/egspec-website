<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AdsSlider extends Model
{
    use HasFactory;

    protected $fillable = [
        'vertical_slider_url',
        'vertical_slider_alt_name',
        'horizontal_slider_url',
        'horizontal_slider_alt_name',
        'page_sections',
        'href_link',
    ];
}