<?php

namespace App\Http\Controllers\WebSite;

use App\CategoriesAdmin;
use App\Http\Controllers\Controller;
use App\Serie;
use App\SousCategoriesAdmin;
use App\Video;
use Mcamara\LaravelLocalization\Facades\LaravelLocalization;

class CategoryController extends Controller
{
    public function index()
    {
        return view('website.pages.category');
    }

    public function show($id)
    {
        $serie = Serie::where('id_category', $id)->latest()->get();
        $category = CategoriesAdmin::find($id);
        $category_name = '';
        if (LaravelLocalization::getCurrentLocale() == 'ar') {
            $category_name = $category->name_categorie_ar;
        } elseif (LaravelLocalization::getCurrentLocale() == 'fr') {
            $category_name = $category->name_categorie_fr;
        } else {
            $category_name = $category->name_categorie_en;
        }
        if (count($serie) == 0) {
            return abort('404');
        }
        return view('website.pages.category', compact('serie', 'category_name'));
    }

}
