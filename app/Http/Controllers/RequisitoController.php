<?php

namespace App\Http\Controllers;

use App\Requisito;
use Illuminate\Http\Request;

class RequisitoController extends Controller
{
    public function index()
    {
        $requisitos = Requisito::orderBy('id')->get();
        return view('requisitos.index', compact('requisitos'));
    }

    public function create()
    {
        return view('requisitos.create');
    }

    public function store(Request $request)
    {
        $requisito = new Requisito();
        $requisito->detalle = $request->input('detalle');
        $requisito->convocatoria_id = $request->input('convocatoria_id');
        $requisito->save();
        return back()->with('confirmacion','Requisito Registrado Correctamente');
    }

    public function show($id)
    {
        $requisito = Requisito::where('id', '=', $id)->firstOrFail();
        return view('requisitos.show', compact('requisito'));
    }

    public function edit($id)
    {
        $requisito = Requisito::where('id', '=', $id)->firstOrFail();
        return view('requisitos.edit', compact('requisito'));
    }

    public function update(Request $request, $id)
    {
        $requisito = Requisito::find($id);

        $requisito->detalle = $request->input('detalle');
        $requisito->convocatoria_id = $request->input('convocatoria_id');
        $requisito->save();

        return redirect('requisitos')->with('confirmacion','Requisito Editado Correctamente');
    }

    public function destroy($id)
    {
        $requisito = Requisito::where('id', '=', $id)->firstOrFail();
        $requisito->delete();
        return back()->with('confirmacion','Requisito Eliminado Corectamente');
    }
}
