<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Convocatoria;
use App\Puntaje;

class PuntajeController extends Controller
{
    public function index($convocatoria_id)
    {
        $puntajes = Puntaje::where('convocatoria_id', $convocatoria_id)->get();
        $convocatoria = Convocatoria::where('id', '=', $convocatoria_id)->firstOrFail();
        return view('puntajes.index', compact('puntajes', 'convocatoria'));
    }

    public function create()
    {
        return view('puntajes.create');
    }

    public function store(Request $request, $convocatoria_id)
    {
        $puntaje = new Puntaje();
        $puntaje->convocatoria_id = $convocatoria_id;
        $puntaje->descripcion = $request->input('descripcion');
        $puntaje->valor = $request->input('valor');
        $puntaje->save();
        return redirect('convocatorias')->with('confirmacion','puntaje Registrado Correctamente');
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

        return redirect('convocatorias')->with('confirmacion','puntaje Editado Correctamente');
    }

    public function destroy($id)
    {
        $puntaje = Puntaje::where('id', '=', $id)->firstOrFail();
        $puntaje->delete();
        return redirect('convocatorias')->with('confirmacion','puntaje Eliminado Corectamente');
    }
}
