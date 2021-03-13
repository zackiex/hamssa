<?php

namespace App\Http\Controllers\WebSite;

use App\Http\Controllers\Controller;
use App\SousCategoriesAdmin;
use Illuminate\Http\Request;

class VedioshowController extends Controller
{
    public function show_vedio($id)
    {
        $vedio = SousCategoriesAdmin::findOrFail($id);
        return view('website.pages.videoshow', compact('vedio'));
    }
}
