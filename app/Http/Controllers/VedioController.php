<?php

namespace App\Http\Controllers;

use App\CategoriesAdmin;
use App\Serie;
use App\Video;
use Illuminate\Http\Request;

class VedioController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $video = Video::with('serie')->latest()->get();
        return view('admin.video', compact('video'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $serie = Serie::latest()->get();
        $video = Video::with('serie')->latest()->get();
        return view('admin.video.create', compact('video', 'serie'));
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
            'id_serie' => 'required|numeric',
            'title_fr' => 'required|min:3|max:150',
            'title_en' => 'required|min:3|max:150',
            'title_ar' => 'required|min:3|max:150',
            'director' => 'required|min:3|max:150',
            'director_ar' => 'required|min:3|max:150',
            'year' => 'required|min:1800|max:2050|numeric',
            'youtube_link' => 'required|url',
            'episode' => 'min:1|numeric|nullable',
            'img_video' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'season' => 'min:1|numeric|nullable',
            'client' => 'min:3|max:150|nullable',
            'client_ar' => 'min:3|max:150|nullable',
            'production' => 'min:3|max:150|nullable',
            'production_ar' => 'min:3|max:150|nullable',
            'production_executif' => 'min:3|max:150|nullable',
            'production_executif_ar' => 'min:3|max:150|nullable',
            'synopsis_fr' => 'min:3|nullable',
            'synopsis_en' => 'min:3|nullable',
            'synopsis_ar' => 'min:3|nullable',
            'scenario_fr' => 'min:3|nullable',
            'scenario_en' => 'min:3|max:300|nullable',
            'scenario_ar' => 'min:3|max:300|nullable',
            'agency_fr' => 'min:3|max:150|nullable',
            'agency_ar' => 'min:3|max:150|nullable',
            'project_fr' => 'min:3|max:150|nullable',
            'project_ar' => 'min:3|max:150|nullable',
        ]);

        if ($request->hasFile('img_video')) {
            $imageName = time() . '.' . $request->img_video->getClientOriginalExtension();
            $request->img_video->move(public_path('images/video'), $imageName);
        }
        $data = new Video();
        $data->id_serie = $request->id_serie;
        $data->title_fr = $request->title_fr;
        $data->title_en = $request->title_en;
        $data->title_ar = $request->title_ar;
        $data->director = $request->director;
        $data->director_ar = $request->director_ar;
        $data->year = $request->year;
        $data->youtube_link = $request->youtube_link;
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
        $data->img_video = $request->hasFile('img_video') ? $imageName : $data->img_video;
        $data->save();

        return redirect('/video')->with('success', 'Les données sont enregistrées avec succès');

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
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $data = Video::find($id);
        $data->delete();
        return redirect('/video')->with('success', 'Les données sont supprimées avec succès');
    }
}
