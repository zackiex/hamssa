<?php

namespace App\Http\Controllers\WebSite;

use App\Http\Controllers\Controller;
use App\Slider;
use App\Email;
use Illuminate\Http\Request;
use Mcamara\LaravelLocalization\Facades\LaravelLocalization;

class IndexController extends Controller
{
    public function index()
    {
        $sliders = Slider::select('id', 'title_' . LaravelLocalization::getCurrentLocale() . ' as title')->get();
        return view('website.pages.index', compact('sliders'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'min:3|max:191|required',
            'subject' => 'min:3|max:191|required',
            'email' => 'email|required',
            'massage' => 'required|min:10',
        ]);
        $data = new Email();
        $data->name = $request->name;
        $data->subject = $request->subject;
        $data->email = $request->email;
        $data->message = $request->massage;
        $data->save();
        return redirect('/')->with('success', 'Votre Email a été envoye');
    }


}
