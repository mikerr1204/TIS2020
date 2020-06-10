<?php

namespace App\Http\Controllers;

use App\Merito;
use Illuminate\Http\Request;

class MeritoController extends Controller
{
    public function index()
    {
        $meritos = Merito::orderBy('id')->get();
        return view('meritos.index', compact('meritos'));
    }

    public function create()
    {
        return view('meritos.create');
    }

    public function store(Request $request)
    {
        $merito = new Merito();
        $merito->tipo = $request->input('tipo');
        $merito->clase = $request->input('clase');
        $merito->detalle = $request->input('detalle');
        $merito->puntos = $request->input('puntos');
        $merito->importancia = $request->input('importancia');
        $merito->convocatoria_id = $request->input('convocatoria_id');
        $merito->save();
        return back()->with('confirmacion','Merito Registrado Correctamente');
    }

    public function show($id)
    {
        $merito = Merito::where('id', '=', $id)->firstOrFail();
        return view('meritos.show', compact('merito'));
    }

    public function edit($id)
    {
        $merito = Merito::where('id', '=', $id)->firstOrFail();
        return view('meritos.edit', compact('merito'));
    }

    public function update(Request $request, $id)
    {
        $merito = Merito::find($id);

        $merito->tipo = $request->input('tipo');
        $merito->clase = $request->input('clase');
        $merito->detalle = $request->input('detalle');
        $merito->puntos = $request->input('puntos');
        $merito->importancia = $request->input('importancia');
        $merito->convocatoria_id = $request->input('convocatoria_id');
        $merito->save();

        return redirect('meritos')->with('confirmacion','Merito Editado Correctamente');
    }

    public function destroy($id)
    {
        $merito = Merito::where('id', '=', $id)->firstOrFail();
        $merito->delete();
        return back()->with('confirmacion','Merito Eliminado Corectamente');
    }
}
