<?php

namespace App\Http\Controllers;

use App\Slider;
use Illuminate\Http\Request;


class SliderController extends Controller
{

    public function index()
    {
        $slider = Slider::latest()->get();
        return view('admin.slider', compact('slider'));
    }

    public function create()
    {
        return view('admin.slider.create');
    }


    public function store(Request $request)
    {
        $request->validate([
            'img_slider' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'title_en' => 'required|min:3|max:191',
            'title_fr' => 'required|min:3|max:191',
            'title_ar' => 'required|min:3|max:191',
        ]);

        if ($request->hasFile('img_slider')) {
            $imageName = time() . '.' . $request->img_slider->getClientOriginalExtension();
            $request->img_slider->move(public_path('images/slider'), $imageName);
        }
        $data = new Slider();
        $data->title_en = $request->title_en;
        $data->title_fr = $request->title_fr;
        $data->title_ar = $request->title_ar;
        $data->img_slider = $imageName;
        $data->save();
        return redirect('/slider')->with('success', 'Les données sont enregistrées avec succès');
    }


    public function edit($id)
    {
        $data = Slider::findOrFail($id);
        return view('admin.sliderEdit', compact('data'));
    }


    public function update(Request $request, $id)
    {
        $request->validate([
            'img_slider' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'title_fr' => 'required|min:3|max:191,' . $id,
            'title_ar' => 'required|min:3|max:191,' . $id,
            'title_en' => 'required|min:3|max:191,' . $id,
        ]);

        if ($request->hasFile('img_slider')) {
            $imageName = time() . '.' . $request->img_slider->getClientOriginalExtension();
            $request->img_slider->move(public_path('images/slider'), $imageName);
        }
        $data = Slider::find($id);
        $data->title_en = $request->title_en;
        $data->title_fr = $request->title_fr;
        $data->title_ar = $request->title_ar;
        $data->img_slider = $request->hasFile('img_slider') ? $imageName : $data->img_slider;
        $data->save();
        return redirect('/slider')->with('success', 'Les données sont mises à jour avec succès');
    }


    public function destroy($id)
    {
        $data = Slider::find($id);
        $data->delete();
        return redirect('/slider')->with('success', 'Les données sont supprimées avec succès');
    }
}
