<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Caffeinated\Shinobi\Models\Role;
use App\User;

class PostulanteController extends Controller
{
    public function index()
    {
        //
    }
    public function create()
    {
        return view('postulantes.create');
    }
    public function store(Request $request)
    {
        $role = Role::where('name', '=', 'Postulante')->firstOrFail()->id;
        $user = new User();
        $user->name = $request->input('name');
        $user->email = $request->input('email');
        $user->password = bcrypt($request->input('ci'));
        $user->save();

        $user->roles()->attach($role);

        $this->guard()->login($user);

        return redirect('home');
    }
    
    protected function guard()
    {
        return Auth::guard();
    }

    public function show($id)
    {
        //
    }
    public function edit($id)
    {
        //
    }
    public function update(Request $request, $id)
    {
        //
    }
    public function destroy($id)
    {
        //
    }
}
