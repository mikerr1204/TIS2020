<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Caffeinated\Shinobi\Models\Role;
use App\User;

class UserController extends Controller
{
    public function index()
    {
        $users = User::orderBy('name')->get();
        return view('users.index', compact('users'));
    }

    public function create()
    {
        $roles = Role::orderBy('name')->get();
        return view('users.create', compact('roles'));
    }

    public function store(Request $request)
    {
        $user = new User();
        $user->name = $request->input('name');
        $user->apellido = $request->input('apellido');
        $user->sis = $request->input('sis');
        $user->ci = $request->input('ci');
        $user->email = $request->input('email');
        $user->password = bcrypt($request->input('ci'));
        $user->save();

        $user->roles()->attach($request->get('roles'));

        return redirect('users');
    }

    public function show($id)
    {
        $user = User::where('id', '=', $id)->firstOrFail();
        return view('users.show', compact('user'));
    }

    public function edit($id)
    {
        $user = User::where('id', '=', $id)->firstOrFail();
        $roles = Role::get();
        return view('users.edit', compact('user', 'roles'));
    }

    public function update(Request $request, $id)
    {
        $user = User::find($id);
        $user->name = $request->input('name');
        $user->apellido = $request->input('apellido');
        $user->sis = $request->input('sis');
        $user->ci = $request->input('ci');
        $user->email = $request->input('email');
        $user->password = bcrypt($request->input('password'));
        $user->save();

        $user->roles()->sync($request->get('roles'));
        return redirect('users');
    }

    public function destroy($id)
    {
        $user = User::where('id', '=', $id)->firstOrFail();
        $user->delete();
        return back();
    }
}
