<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Caffeinated\Shinobi\Models\Role;
use App\User;
use App\Postulation;
use App\Formulario;

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
        $user->apellido = $request->input('apellido');
        $user->sis = $request->input('sis');
        $user->ci = $request->input('ci');
        $user->email = $request->input('email');
        $user->password = bcrypt($request->input('ci'));
        $user->save();

        $user->roles()->attach($role);

        $this->guard()->login($user);

        return redirect('home');
    }

    public function storeConvocatoriaForm(Request $request, $id)
    {
        $formulario = new Formulario();
        if($request->hasFile('documentos')) {
            $file_array = $request->file('documentos');
            $file_size = count($file_array);
            $formulario->documentos = $file_array;
            for($a = 0; $a<$file_size; $a++) {
                // $formulario->documentos = $request->file('documentos');
            }
        }
        // else {
        //     return back()->with('msg', 'Debe ingresar sus archivos de documentos')
        // }

        if($request->hasFile('meritos')) {
            $file_array = $request->file('meritos');
            $file_size = count($file_array);
            $formulario->meritos = $file_array;
            for($a = 0; $a<$file_size; $a++) {
                // $formulario->meritos = $request->input('meritos');
            }
        }
        // else {
        //     return back()->with('msg', 'Debe ingresar sus archivos de meritos')
        // }

        if($request->hasFile('requisitos')) {
            $file_array = $request->file('requisitos');
            $file_size = count($file_array);
            $formulario->requisitos = $file_array;
            for($a = 0; $a<$file_size; $a++) {
                // $formulario->requisitos = $request->input('requisitos');
            }
        }
        // else {
        //     return back()->with('msg', 'Debe ingresar sus archivos de requisitos')
        // }

        $formulario->nombre = $request->input('nombre');
        $formulario->carrera = $request->input('carrera');
        $formulario->menciones = $request->input('menciones');
        $formulario->requisitos = $request->input('requisitos');
        $formulario->save();
        return redirect('home');
    }

    public function getStoreConvocatoriaForm() {
        return view('postulations/subscribe');
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
