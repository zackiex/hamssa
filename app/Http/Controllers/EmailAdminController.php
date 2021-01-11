<?php

namespace App\Http\Controllers;

use App\email;
use App\EmailAdmin;
use Illuminate\Http\Request;

class EmailAdminController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $email = Email::all();
        return view('admin.email',compact('email'));
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
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'min:3|max:191|nullable',
            'email' => 'email:rfc,dns|required|min:3|max:191',
            'subject' => 'required|min:3|max:191|nullable',
            'massage' => 'required|min:3|max:800',
        ]);

        $data = new EmailAdmin();
        $data->name = $request->name;
        $data->email = $request->email;
        $data->subject = $request->subject;
        $data->message = $request->massage;
        $data->save();
        return redirect('/')->with('success', 'Email envoyé avec success');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\EmailAdmin  $emailAdmin
     * @return \Illuminate\Http\Response
     */
    public function show(EmailAdmin $emailAdmin)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\EmailAdmin  $emailAdmin
     * @return \Illuminate\Http\Response
     */
    public function edit(EmailAdmin $emailAdmin)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\EmailAdmin  $emailAdmin
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, EmailAdmin $emailAdmin)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\EmailAdmin  $emailAdmin
     * @return \Illuminate\Http\Response
     */
    public function destroy(EmailAdmin $emailAdmin)
    {
        //
    }
}
