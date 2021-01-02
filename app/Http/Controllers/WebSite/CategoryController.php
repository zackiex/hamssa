<?php

namespace App\Http\Controllers\WebSite;

use App\CategoriesAdmin;
use App\Http\Controllers\Controller;
use App\SousCategoriesAdmin;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function index()
    {
        return view('website.pages.category');
    }

    public function edit($id)
    {
//        $categoriesAdmin = CategoriesAdmin::latest()->get();
//        $souscategories = SousCategoriesAdmin::findOrFail($id);
        return view('website.pages.category');
    }

}
