<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Serie extends Model
{
    protected $fillable = [
        'id_category',
        'name_fr',
        'name_ar',
        'name_en',
        'img_series',
    ];

    public function category()
    {
        return $this->belongsTo(CategoriesAdmin::class, 'id_category')->withDefault();
    }

}
