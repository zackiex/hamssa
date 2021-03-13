<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Video extends Model
{
    protected $fillable = [
        'id_serie',
        'title_fr',
        'title_en',
        'title_ar',
        'director',
        'director_ar',
        'year',
        'youtube_link',
        'episode',
        'img_video',
        'season',
        'client',
        'client_ar',
        'production',
        'production_ar',
        'production_executif',
        'production_executif_ar',
        'synopsis_fr',
        'synopsis_en',
        'synopsis_ar',
        'scenario_fr',
        'scenario_ar',
        'scenario_en',
        'agency_fr',
        'agency_ar',
        'project_fr',
        'project_ar'
    ];

    public function serie()
    {
        return $this->belongsTo(Serie::class, 'id_serie')->withDefault();
    }
}
