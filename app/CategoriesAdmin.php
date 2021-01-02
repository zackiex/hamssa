<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CategoriesAdmin extends Model
{
    protected $appends = [
        'name_categorie_ar',
        'name_categorie_fr',
        'name_categorie_en',
    ];
}
