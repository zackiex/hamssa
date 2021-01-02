<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UserAdminController extends Controller
{

    public function index()
    {
        $user = User::latest()->get();
        return view('admin.user', compact('user'));
    }


    public function create()
    {
        return view('admin.user.create');
    }


    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|min:3|max:191|unique:users',
            'email' => 'email:rfc,dns|required|min:3|max:191|unique:users',
            'password' => 'required|min:6|max:255',
            'confirm_password' => 'required|same:password',
        ]);

        $data = new User();
        $data->name = $request->name;
        $data->email = $request->email;
        $data->password = bcrypt($request->password);
        $data->save();
        return redirect('/user')->with('success', 'Les données sont enregistrées avec succès');
    }


    public function show($id)
    {

    }


    public function edit($id)
    {
        $data = User::findOrFail($id);
        return view('admin.userEdit', compact('data'));
    }


    public function update(Request $request, $id)
    {
        $request->validate([
            'name' => 'required|min:3|max:191|unique:users,name,' . $id,
            'email' => 'email:rfc,dns|required|min:3|max:191|unique:users,email,' . $id,
            'password' => 'required|min:6|max:255',
            'confirm_password' => 'required|same:password',
        ]);

        $data = User::find($id);
        $data->name = $request->name;
        $data->email = $request->email;
        $data->password = bcrypt($request->password);
        $data->save();
        return redirect('/user')->with('success', 'Les données sont mises à jour avec succès');
    }


    public function destroy($id)
    {
        $data = User::find($id);
        $data->delete();
        return redirect('/user')->with('success', 'Les données sont supprimées avec succès');
    }
}
