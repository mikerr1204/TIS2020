<?php

namespace App\Http\Controllers;

use App\Materia;
use Illuminate\Http\Request;

class MateriaController extends Controller
{
    public function index()
    {
        $materias = Materia::orderBy('name')->get();
        return view('materias.index', compact('materias'));
    }

    public function create()
    {
        return view('materias.create');
    }

    public function store(Request $request)
    {
        $materia = new Materia();
        $materia->codigo = $request->input('codigo');
        $materia->name = $request->input('name');
        $materia->save();
        return redirect('materias')->with('confirmacion','Materia Registrada Correctamente');
    }

    public function show($id)
    {
        $materia = Materia::where('id', '=', $id)->firstOrFail();
        return view('materias.show', compact('materia'));
    }

    public function edit($id)
    {
        $materia = Materia::where('id', '=', $id)->firstOrFail();
        return view('materias.edit', compact('materia'));
    }

    public function update(Request $request, $id)
    {
        $materia = Materia::find($id);

        $materia->codigo = $request->input('codigo');
        $materia->name = $request->input('name');
        $materia->save();

        return redirect('materias')->with('confirmacion','Materia Editado Correctamente');
    }

    public function destroy($id)
    {
        $materia = Materia::where('id', '=', $id)->firstOrFail();
        $materia->delete();
        return back()->with('confirmacion','Materia Eliminada Corectamente');
    }
}
