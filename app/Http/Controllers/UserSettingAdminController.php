<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;

class UserSettingAdminController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $data = User::all();
        return view('admin.userSetting', compact('data'));
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
        //
    }

    public function show(UserSettingAdmin $userSettingAdmin)
    {
        //
    }

    public function edit($id)
    {
        $data = User::findOrFail($id);
        return view('admin.userSetting', compact('data'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'name' => 'required|min:3|max:191|unique:users,name,' . $id,
            'email' => 'email:rfc,dns|required|min:3|max:191|unique:users,email,' . $id,
            'old_password' => 'required',
            'new_password' => 'required|min:6',
            'confirm_password' => 'required|same:new_password',
        ]);
        $data = User::find($id);
        $user = User::find($id);

        if (!\Hash::check($request->old_password, $user->password)) {
            return back()->with('error', 'You have entered wrong password');
        } else {
            $data->name = $request->name;
            $data->email = $request->email;
            $data->password = bcrypt($request->new_password);
            $data->save();
            return redirect('/user')->with('success', 'Les données sont mises à jour avec succès');
        }

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param \App\UserSettingAdmin $userSettingAdmin
     * @return \Illuminate\Http\Response
     */
    public function destroy(UserSettingAdmin $userSettingAdmin)
    {
        //
    }
}
