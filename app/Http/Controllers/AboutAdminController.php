<?php

namespace App\Http\Controllers;

use App\AboutAdmin;
use Illuminate\Http\Request;

class AboutAdminController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = AboutAdmin::findOrFail(1);
        return view('admin.about', compact('data'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
    }

    /**
     * Display the specified resource.
     *
     * @param \App\AboutAdmin $aboutAdmin
     * @return \Illuminate\Http\Response
     */
    public function show(AboutAdmin $aboutAdmin)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param \App\AboutAdmin $aboutAdmin
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data = AboutAdmin::findOrFail($id);
        return view('admin.about', compact('data'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param \App\AboutAdmin $aboutAdmin
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'adresse' => 'required|min:3|max:191',
            'adresse_ar' => 'required|min:3|max:191',
            'mobile' => 'required|digits:10',
            'mobile2' => 'required|digits:10',
            'telephonefixe' => 'required|min:9',
            'fax' => 'required|min:9',
            'Gèolocalisation' => 'min:5|max:255',
            'email' => 'email|required',
            'tempstravail_ar' => 'required|min:5|max:255',
            'tempstravail_fr' => 'required|min:5|max:255',
            'tempstravail_en' => 'required|min:5|max:255',
            'facebook' => 'required|min:5|max:255|url',
            'instagram' => 'required|min:5|max:255|url',
            'youtube' => 'required|min:5|max:255|url',
            'twitter' => 'required|min:5|max:255|url',
        ]);

        $data = AboutAdmin::find(1);
        $data->adresse = $request->adresse;
        $data->adresse_ar = $request->adresse_ar;
        $data->telephone = $request->mobile;
        $data->telephone2 = $request->mobile2;
        $data->email = $request->email;
        $data->fax = $request->fax;
        $data->telephonefixe = $request->telephonefixe;
        $data->Gèolocalisation = $request->Gèolocalisation;
        $data->tempstravail_ar = $request->tempstravail_ar;
        $data->tempstravail_fr = $request->tempstravail_fr;
        $data->tempstravail_en = $request->tempstravail_en;
        $data->facebook = $request->facebook;
        $data->instagram = $request->instagram;
        $data->youtube = $request->youtube;
        $data->twitter = $request->twitter;
        $data->save();
        return redirect('/about')->with('success', 'Les données sont mises à jour avec succès');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param \App\AboutAdmin $aboutAdmin
     * @return \Illuminate\Http\Response
     */
    public function destroy(AboutAdmin $aboutAdmin)
    {
        //
    }
}
