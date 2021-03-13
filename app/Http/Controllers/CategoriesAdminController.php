<?php

namespace App\Http\Controllers;

use App\CategoriesAdmin;
use Illuminate\Http\Request;

class CategoriesAdminController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $categoriesAdmin = CategoriesAdmin::latest()->get();
        return view('admin.categories', compact('categoriesAdmin'));

    }


    public function create()
    {
        return view('admin.categorie.create');

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
            'name_categorie_ar' => 'required|min:3|max:50|unique:categories_admins',
            'name_categorie_fr' => 'required|min:3|max:50|unique:categories_admins',
            'name_categorie_en' => 'required|min:3|max:50|unique:categories_admins',
        ]);

        $data = new CategoriesAdmin();
        $data->name_categorie_ar = $request->name_categorie_ar;
        $data->name_categorie_fr = $request->name_categorie_fr;
        $data->name_categorie_en = $request->name_categorie_en;
        $data->save();
        return redirect('/categories')->with('success', 'Les données sont enregistrées avec succès');

    }


    public function show(CategoriesAdmin $categoriesAdmin)
    {

    }


    public function edit($id)
    {
        $data = CategoriesAdmin::findOrFail($id);
        return view('admin.CategoriesEdit', compact('data'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'name_categorie_ar' => 'required|min:3|max:50|unique:categories_admins,name_categorie_ar,' . $id,
            'name_categorie_fr' => 'required|min:3|max:50|unique:categories_admins,name_categorie_fr,' . $id,
            'name_categorie_en' => 'required|min:3|max:50|unique:categories_admins,name_categorie_en,' . $id,

        ]);
        $data = CategoriesAdmin::find($id);;
        $data->name_categorie_ar = $request->name_categorie_ar;
        $data->name_categorie_fr = $request->name_categorie_fr;
        $data->name_categorie_en = $request->name_categorie_en;
        $data->save();

        return redirect('/categories')->with('success', 'Les données sont mises à jour avec succès');
    }

    public function destroy($id)
    {
        $data = CategoriesAdmin::find($id);
        $data->delete();
        return redirect('/categories')->with('success', 'Les données sont supprimées avec succès');

    }
}
