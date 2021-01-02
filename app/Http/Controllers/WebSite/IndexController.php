<?php

namespace App\Http\Controllers\WebSite;

use App\Http\Controllers\Controller;
use App\Slider;
use Illuminate\Http\Request;
use Mcamara\LaravelLocalization\Facades\LaravelLocalization;

class IndexController extends Controller
{
    public  function index(){
        $sliders = Slider::select('id','title_'.LaravelLocalization::getCurrentLocale().' as title' )->get();
        return view('website.pages.index',compact('sliders'));
    }

}
