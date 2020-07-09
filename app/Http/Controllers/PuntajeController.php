<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Merito;
use App\Puntaje;

class PuntajeController extends Controller
{
    public function index($merito_id)
    {
        $puntajes = Puntaje::where('merito_id', $merito_id)->get();
        $merito = Merito::where('id', '=', $merito_id)->firstOrFail();
        return view('puntajes.index', compact('puntajes', 'merito'));
    }

    public function create($merito)
    {
        return view('puntajes.create', compact('merito'));
    }

    public function store(Request $request, $merito_id)
    {
        $merito = Merito::where('id', '=', $merito_id)->firstOrFail();
        if($request->input('valor') > $merito->puntos) {
            return redirect('meritos')->with('error','El item no puede valer mas que el puntaje!');
        } else {
            $puntaje = new Puntaje();
            $puntaje->merito_id = $merito_id;
            $puntaje->descripcion = $request->input('descripcion');
            $puntaje->valor = $request->input('valor');
            $puntaje->save();
            return redirect('meritos')->with('confirmacion','Item Registrado Correctamente');
        }
    }

    public function show($id)
    {
        $puntaje = Puntaje::where('id', '=', $id)->firstOrFail();
        return view('puntajes.show', compact('puntaje'));
    }

    public function edit($id)
    {
        $puntaje = Puntaje::where('id', '=', $id)->firstOrFail();
        return view('puntajes.edit', compact('puntaje'));
    }

    public function update(Request $request, $id)
    {
        $puntaje = Puntaje::find($id);

        $puntaje->descripcion = $request->input('descripcion');
        $puntaje->valor = $request->input('valor');
        $puntaje->save();

        return redirect('meritos')->with('confirmacion','Item Editado Correctamente');
    }

    public function destroy($id)
    {
        $puntaje = Puntaje::where('id', '=', $id)->firstOrFail();
        $puntaje->delete();
        return redirect('meritos')->with('confirmacion','Item Eliminado Corectamente');
    }
}
