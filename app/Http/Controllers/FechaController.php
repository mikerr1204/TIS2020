<?php

namespace App\Http\Controllers;

use App\Fecha;
use Illuminate\Http\Request;

class FechaController extends Controller
{
    public function index()
    {
        $fechas = Fecha::orderBy('id')->get();
        return view('fechas.index', compact('fechas'));
    }

    public function create()
    {
        return view('fechas.create');
    }

    public function store(Request $request)
    {
        $fecha = new Fecha();
        $fecha->evento = $request->input('evento');
        $fecha->horaIni = $request->input('horaIni');
        $fecha->horaFin = $request->input('horaFin');
        $fecha->fechaIni = $request->input('fechaIni');
        $fecha->fechaFin = $request->input('fechaFin');
        $fecha->convocatoria_id = $request->input('convocatoria_id');
        $fecha->save();
        return back()->with('confirmacion','Evento Registrado Correctamente');
    }

    public function show($id)
    {
        $fecha = Fecha::where('id', '=', $id)->firstOrFail();
        return view('fechas.show', compact('fecha'));
    }

    public function edit($id)
    {
        $fecha = Fecha::where('id', '=', $id)->firstOrFail();
        return view('fechas.edit', compact('fecha'));
    }

    public function update(Request $request, $id)
    {
        $fecha = Fecha::find($id);

        $fecha->evento = $request->input('evento');
        $fecha->horaIni = $request->input('horaIni');
        $fecha->horaFin = $request->input('horaFin');
        $fecha->fechaIni = $request->input('fechaIni');
        $fecha->fechaFin = $request->input('fechaFin');
        $fecha->convocatoria_id = $request->input('convocatoria_id');
        $fecha->save();

        return redirect('fechas')->with('confirmacion','Evento Editado Correctamente');
    }

    public function destroy($id)
    {
        $fecha = Fecha::where('id', '=', $id)->firstOrFail();
        $fecha->delete();
        return back()->with('confirmacion','Evento Eliminado Corectamente');
    }
}
