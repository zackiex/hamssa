<?php

namespace App\Http\Controllers;

use App\CategoriesAdmin;
use App\SousCategoriesAdmin;
use Illuminate\Http\Request;

class SousCategoriesAdminController extends Controller
{

    public function index()
    {

        $sousCategories = SousCategoriesAdmin::with('category')->latest()->get();
        return view('admin.souscategories', compact('sousCategories'));
    }


    public function create()
    {
        $categoriesAdmin = CategoriesAdmin::latest()->get();
        $souscategories = SousCategoriesAdmin::with('category')->latest()->get();
        return view('admin.souscategorie.create', compact('souscategories',
            'categoriesAdmin'));
    }


    public function store(Request $request)
    {
        $request->validate([
            'name_categorie' => 'required|min:1',
            'sous_categorie_fr' => 'required|min:3|max:100',
            'sous_categorie_en' => 'required|min:3|max:100',
            'sous_categorie_ar' => 'required|min:3|max:100',
            'director' => 'required|min:3|max:100',
            'director_ar' => 'required|min:3|max:100',
            'year' => 'required|min:2|max:2050|numeric',
            'youtube_link' => 'required|min:12|url',
            'episode' => 'min:1|numeric|nullable',
            'season' => 'min:1|numeric|nullable',
            'client' => 'min:3|max:100|nullable',
            'client_ar' => 'min:3|max:100|nullable',
            'production' => 'min:3|max:100|nullable',
            'production_ar' => 'min:3|max:100|nullable',
            'production_executif' => 'min:3|max:100|nullable',
            'production_executif_ar' => 'min:3|max:100|nullable',
            'synopsis_fr' => 'min:3|max:300|nullable',
            'synopsis_en' => 'min:3|max:300|nullable',
            'synopsis_ar' => 'min:3|max:300|nullable',
            'scenario_fr' => 'min:3|max:100|nullable',
            'scenario_en' => 'min:3|max:100|nullable',
            'scenario_ar' => 'min:3|max:100|nullable',
            'agency_fr' => 'min:3|max:100|nullable',
            'agency_ar' => 'min:3|max:100|nullable',
            'project_fr' => 'min:3|max:100|nullable',
            'project_ar' => 'min:3|max:100|nullable',
        ]);

        $data = new SousCategoriesAdmin();
        $data->id_categorie = $request->name_categorie;
        $data->sous_categorie_fr = $request->sous_categorie_fr;
        $data->sous_categorie_en = $request->sous_categorie_en;
        $data->sous_categorie_ar = $request->sous_categorie_ar;
        $data->director = $request->director;
        $data->director_ar = $request->director_ar;
        $data->year = $request->year;
        $data->youtubelink = $request->youtube_link;
        $data->episode = $request->episode;
        $data->season = $request->season;
        $data->client = $request->client;
        $data->client_ar = $request->client_ar;
        $data->production = $request->production;
        $data->production_ar = $request->production_ar;
        $data->production_executif = $request->production_executif;
        $data->production_executif_ar = $request->production_executif_ar;
        $data->synopsis_fr = $request->synopsis_fr;
        $data->synopsis_en = $request->synopsis_en;
        $data->synopsis_ar = $request->synopsis_ar;
        $data->scenario_fr = $request->scenario_fr;
        $data->scenario_ar = $request->scenario_ar;
        $data->scenario_en = $request->scenario_en;
        $data->agency_fr = $request->agency_fr;
        $data->agency_ar = $request->agency_ar;
        $data->project_fr = $request->project_fr;
        $data->project_ar = $request->project_ar;
        $data->save();

        return redirect('/souscategories')->with('success',
            'Les données sont enregistrées avec succès');

    }

    public function show(SousCategoriesAdmin $sousCategoriesAdmin)
    {
        //
    }

    public function edit($id)
    {
        $categoriesAdmin = CategoriesAdmin::latest()->get();
        $souscategories = SousCategoriesAdmin::findOrFail($id);

        return view('admin.sous_categorie_edit', compact('souscategories', 'categoriesAdmin'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'name_categorie' => 'required|min:1',
            'sous_categorie_fr' => 'required|min:3|max:100',
            'sous_categorie_en' => 'required|min:3|max:100',
            'sous_categorie_ar' => 'required|min:3|max:100',
            'director' => 'required|min:3|max:100',
            'director_ar' => 'required|min:3|max:100',
            'year' => 'required|min:2|max:2050|numeric',
            'youtube_link' => 'required|min:12|url',
            'episode' => 'min:1|numeric|nullable',
            'season' => 'min:1|numeric|nullable',
            'client' => 'min:3|max:1000|nullable',
            'client_ar' => 'min:3|max:1000|nullable',
            'production' => 'min:3|max:1000|nullable',
            'production_ar' => 'min:3|max:1000|nullable',
            'production_executif' => 'min:3|max:1000|nullable',
            'production_executif_ar' => 'min:3|max:1000|nullable',
            'synopsis_fr' => 'min:3|max:3000|nullable',
            'synopsis_en' => 'min:3|max:3000|nullable',
            'synopsis_ar' => 'min:3|max:3000|nullable',
            'scenario_fr' => 'min:3|max:1000|nullable',
            'scenario_en' => 'min:3|max:1000|nullable',
            'scenario_ar' => 'min:3|max:1000|nullable',
            'agency_fr' => 'min:3|max:1000|nullable',
            'agency_ar' => 'min:3|max:1000|nullable',
            'project_fr' => 'min:3|max:1000|nullable',
            'project_ar' => 'min:3|max:1000|nullable',
        ]);

        $data = SousCategoriesAdmin::find($id);
        $data->id_categorie = $request->name_categorie;
        $data->sous_categorie_fr = $request->sous_categorie_fr;
        $data->sous_categorie_en = $request->sous_categorie_en;
        $data->sous_categorie_ar = $request->sous_categorie_ar;
        $data->director = $request->director;
        $data->director_ar = $request->director_ar;
        $data->year = $request->year;
        $data->youtubelink = $request->youtube_link;
        $data->episode = $request->episode;
        $data->season = $request->season;
        $data->client = $request->client;
        $data->client_ar = $request->client_ar;
        $data->production = $request->production;
        $data->production_ar = $request->production_ar;
        $data->production_executif = $request->production_executif;
        $data->production_executif_ar = $request->production_executif_ar;
        $data->synopsis_fr = $request->synopsis_fr;
        $data->synopsis_en = $request->synopsis_en;
        $data->synopsis_ar = $request->synopsis_ar;
        $data->scenario_fr = $request->scenario_fr;
        $data->scenario_ar = $request->scenario_ar;
        $data->scenario_en = $request->scenario_en;
        $data->agency_fr = $request->agency_fr;
        $data->agency_ar = $request->agency_ar;
        $data->project_fr = $request->project_fr;
        $data->project_ar = $request->project_ar;
        $data->save();
        return redirect('/souscategories')->with('success', 'Les données sont enregistrées avec succès');

    }

    public function destroy($id)
    {
        $data = SousCategoriesAdmin::find($id);
        $data->delete();
        return redirect('/souscategories')->with('success', 'Les données sont supprimées avec succès');

    }
}
