<?php

namespace App\Http\Controllers;

use App\Requisitos;
use Illuminate\Http\Request;

class RequisitosController extends Controller
{
    public function index($convocatoria_id)
    {
        $requisitos = Requisitos::where('convocatoria_id', $convocatoria_id)->get();
        // $requisitos = requisitos::orderBy('detalles')->get();
        return view('convocatorias.requisitos.index', compact('requisitos', 'convocatoria_id'));
    }

    public function create($convocatoria_id)
    {
        return view('convocatorias.requisitos.create', compact('convocatoria_id'));
    }

    public function store(Request $request, $convocatoria_id)
    {
        $requisitos = new Requisitos();
        $requisitos->detalles = $request->input('detalles');
        $requisitos->convocatoria_id = $convocatoria_id;
        $requisitos->obligatorio = $request->input('obligatorio');
        $requisitos->save();

        return redirect()->route('requisitos.index', ['convocatoria_id' => $convocatoria_id]);
    }

    public function show($id)
    {
        $requisitos = Requisitos::where('id', '=', $id)->firstOrFail();
        return view('convocatorias.requisitos.show', compact('requisitos'));
    }

    public function edit($id)
    {
        $requisitos = Requisitos::where('id', '=', $id)->firstOrFail();
        return view('convocatorias.requisitos.edit', compact('requisitos'));
    }

    public function update(Request $request, $id)
    {
        $requisitos = Requisitos::find($id);

        $convocatoria_id = $requisitos->convocatoria_id;

        $requisitos->detalles = $request->input('detalles');
        $requisitos->obligatorio = $request->input('obligatorio');
        $requisitos->save();

        return redirect()->route('requisitos.index', ['convocatoria_id' => $convocatoria_id]);
    }

    public function destroy($id)
    {
        $requisitos = Requisitos::where('id', '=', $id)->firstOrFail();
        $requisitos->delete();
        return back();
    }
}

