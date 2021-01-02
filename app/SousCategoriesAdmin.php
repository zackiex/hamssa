<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SousCategoriesAdmin extends Model
{
    protected $appends = [
        'name_categorie',
        'sous_categorie_fr',
        'sous_categorie_en',
        'sous_categorie_ar',
        'director',
        'director_ar',
        'year',
        'youtube_link',
        'episode',
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
        'scenario_en',
        'scenario_ar',
        'agency_fr',
        'agency_ar',
        'project_fr',
        'project_ar',
    ];
    public function category(){
        return $this->belongsTo(CategoriesAdmin::class,'id_categorie')->withDefault();
    }
}
