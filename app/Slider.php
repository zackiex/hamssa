<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Slider extends Model
{
    protected $fillable = [
        'title_ar',
        'title_fr',
        'title_en',
        'img_slider'
    ];
}
