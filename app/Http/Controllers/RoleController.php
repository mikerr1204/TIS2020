<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Caffeinated\Shinobi\Models\Role;
use Caffeinated\Shinobi\Models\Permission;

class RoleController extends Controller
{
    public function index()
    {
        $roles = Role::orderBy('name')->get();
        return view('roles.index', compact('roles'));
    }

    public function create()
    {
        $permissions = Permission::get();
        return view('roles.create', compact('permissions'));
    }

    public function store(Request $request)
    {
        $role = new Role();
        $role->name = $request->input('name');
        $role->slug = $request->input('name');
        $role->description = $request->input('description');
        $role->special = $request->input('special');
        $role->save();

        $role->permissions()->attach($request->get('permissions'));

        return redirect('roles');
    }

    public function show($slug)
    {
        $role = Role::where('slug', '=', $slug)->firstOrFail();
        return view('roles.show', compact('role'));
    }

    public function edit($slug)
    {
        $role = Role::where('slug', '=', $slug)->firstOrFail();
        $permissions = Permission::get();
        return view('roles.edit', compact('role', 'permissions'));
    }

    public function update(Request $request, $id)
    {
        $role = Role::find($id);

        $role->name = $request->input('name');
        $role->slug = $request->input('name');
        $role->description = $request->input('description');
        $role->special = $request->input('special');
        $role->save();

        $role->permissions()->sync($request->get('permissions'));

        return redirect('roles');
    }

    public function destroy($slug)
    {
        $role = Role::where('slug', '=', $slug)->firstOrFail();
        $role->delete();
        return back();
    }
}
