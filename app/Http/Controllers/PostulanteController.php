<?php

namespace App\Http\Controllers;

use App\Http\Requests\UserRequest;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Caffeinated\Shinobi\Models\Role;
use App\User;
use App\Postulation;
use App\Codigo;

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
    public function store(UserRequest $request)
    {
        $estudiante = Codigo::where('codigo','=',$request->valEst)->count();
        $kardex = Codigo::where('codigo','=',$request->valKardex)->count();
        if ($estudiante==1 && $kardex==1) {
            $role = Role::where('name', '=', 'Postulante')->firstOrFail()->id;$user = new User();
            $user->name = $request->input('name');
            $user->apellido = $request->input('apellido');
            $user->sis = $request->input('sis');
            $user->ci = $request->input('ci');
            $user->valEst = $request->input('valEst');
            $user->valKardex = $request->input('valKardex');
            $user->email = $request->input('email');
            $user->password = bcrypt($request->input('password'));
            $user->save();
    
            $user->roles()->attach($role);
    
            $this->guard()->login($user);
    
            return redirect('home')->with('confirmacion','Registro Exitoso');
        } else {
            return back()->with('negacion','Codigos incorrectos');
        }            
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
