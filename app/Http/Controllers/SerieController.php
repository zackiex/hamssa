<?php

namespace App\Http\Controllers;

use App\CategoriesAdmin;
use App\Serie;
use Illuminate\Http\Request;

class SerieController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $serie = Serie::with('category')->latest()->get();
        return view('admin.serie', compact('serie'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categoriesAdmin = CategoriesAdmin::latest()->get();
        $series = Serie::with('category')->latest()->get();
        return view('admin.serie.create', compact('series', 'categoriesAdmin'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'id_category' => 'required',
            'name_fr' => 'required|min:3|max:100',
            'name_ar' => 'required|min:3|max:100',
            'name_en' => 'required|min:3|max:100',
            'img_serie' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        if ($request->hasFile('img_serie')) {
            $imageName = time() . '.' . $request->img_serie->getClientOriginalExtension();
            $request->img_serie->move(public_path('images/serie'), $imageName);
        }

        $data = new Serie();
        $data->id_category = $request->id_category;
        $data->name_ar = $request->name_ar;
        $data->name_fr = $request->name_fr;
        $data->name_en = $request->name_en;
        $data->img_serie = $imageName;
        $data->save();

        return redirect('/serie')->with('success', 'Les données sont enregistrées avec succès');
    }

    /**
     * Display the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $categoriesAdmin = CategoriesAdmin::latest()->get();
        $data = Serie::findOrFail($id);
        return view('admin.serieEdit', compact('data', 'categoriesAdmin'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'id_category' => 'required',
            'name_fr' => 'required|min:3|max:100',
            'name_ar' => 'required|min:3|max:100',
            'name_en' => 'required|min:3|max:100',
            'img_serie' => 'required|image|mimes:jpeg,png,jpg,gif,svg',
        ]);

        if ($request->hasFile('img_serie')) {
            $imageName = time() . '.' . $request->img_serie->getClientOriginalExtension();
            $request->img_serie->move(public_path('images/serie'), $imageName);
        }

        $data = Serie::find($id);
        $data->img_serie = $request->hasFile('img_serie') ? $imageName : $data->img_serie;
        $data->id_category = $request->id_category;
        $data->name_ar = $request->name_ar;
        $data->name_fr = $request->name_fr;
        $data->name_en = $request->name_en;

        $data->save();

        return redirect('/serie')->with('success', 'Les données sont enregistrées avec succès');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $data = Serie::find($id);
        $data->delete();
        return redirect('/serie')->with('success', 'Les données sont supprimées avec succès');
    }
}
