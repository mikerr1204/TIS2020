<?php

namespace App\Http\Controllers;

use App\Requerimiento;
use App\Materia;
use Illuminate\Http\Request;

class RequerimientoController extends Controller
{
    public function index()
    {
        $requerimientos = Requerimiento::orderBy('id')->get();
        $materias = Materia::get();
        return view('requerimientos.index', compact('requerimientos', 'materias'));
    }

    public function create()
    {
        return view('requerimientos.create');
    }

    public function store(Request $request)
    {
        $requerimiento = new Requerimiento();
        $requerimiento->items = $request->input('items');
        $requerimiento->cantidad = $request->input('cantidad');
        $requerimiento->hrsAcademic = $request->input('hrsAcademic');
        $requerimiento->materia_id = $request->input('materia_id');
        $requerimiento->convocatoria_id = $request->input('convocatoria_id');
        $requerimiento->save();
        return back()->with('confirmacion','Requerimiento Registrado Correctamente');
    }

    public function show($id)
    {
        $requerimiento = Requerimiento::where('id', '=', $id)->firstOrFail();
        return view('requerimientos.show', compact('requerimiento'));
    }

    public function edit($id)
    {
        $requerimiento = Requerimiento::where('id', '=', $id)->firstOrFail();
        $materias = Materia::get();
        return view('requerimientos.edit', compact('requerimiento','materias'));
    }

    public function update(Request $request, $id)
    {
        $requerimiento = Requerimiento::find($id);

        $requerimiento->items = $request->input('items');
        $requerimiento->cantidad = $request->input('cantidad');
        $requerimiento->hrsAcademic = $request->input('hrsAcademic');
        $requerimiento->materia_id = $request->input('materia_id');
        $requerimiento->convocatoria_id = $request->input('convocatoria_id');
        $requerimiento->save();

        return redirect('requerimientos')->with('confirmacion','Requerimiento Editado Correctamente');
    }

    public function destroy($id)
    {
        $requerimiento = Requerimiento::where('id', '=', $id)->firstOrFail();
        $requerimiento->delete();
        return back()->with('confirmacion','Requerimiento Eliminado Corectamente');
    }
}
