<?php

namespace App\Http\Controllers\WebSite;

use App\Http\Controllers\Controller;
use App\SousCategoriesAdmin;
use App\Video;
use Illuminate\Http\Request;

class VedioshowController extends Controller
{
    public function show_vedio($id)
    {
        $vedios = Video::where('id_serie', $id)->latest()->get();
        if (count($vedios) == 0) {
            return abort('404');
        }
        //$vedioSerie = Video::where('id_serie', $id)->latest()->get();
        return view('website.pages.videoshow', compact('vedios'));
    }
}
