<?php

namespace App\Http\Controllers;

use App\Convocatoria;
use App\Documentos;
use App\Requisitos;
use App\Meritos;

use Illuminate\Http\Request;

class ConvocatoriaController extends Controller
{
    public function index()
    {
        $convocatorias = Convocatoria::orderBy('titulo')->get();
        return view('convocatorias.index', compact('convocatorias'));
    }
    public function create()
    {
        return view('convocatorias.create');
    }
    public function store(Request $request)
    {
        $convocatoria = new Convocatoria();
        $convocatoria->titulo = $request->input('titulo');
        $convocatoria->description = $request->input('description');
        $convocatoria->fechaIni = $request->input('fechaIni');
        $convocatoria->fechaFin = $request->input('fechaFin');
        $convocatoria->save();
        return redirect('convocatorias');
    }
    public function show($id)
    {
        $convocatoria = Convocatoria::where('id', '=', $id)->firstOrFail();
        $documentos = Documentos::where('convocatoria_id', $id)->get();
        $meritos = Meritos::where('convocatoria_id', $id)->get();
        $requisitos = Requisitos::where('convocatoria_id', $id)->get();
        return view('convocatorias.show',
            compact('convocatoria', 'documentos', 'meritos', 'requisitos'));
    }

    public function edit($id)
    {
        $convocatoria = Convocatoria::where('id', '=', $id)->firstOrFail();
        return view('convocatorias.edit', compact('convocatoria'));
    }

    public function update(Request $request, $id)
    {
        $convocatoria = Convocatoria::find($id);

        $convocatoria->titulo = $request->input('titulo');
        $convocatoria->description = $request->input('description');
        $convocatoria->fechaIni = $request->input('fechaIni');
        $convocatoria->fechaFin = $request->input('fechaFin');
        $convocatoria->save();

        return redirect('convocatorias');
    }

    public function destroy($id)
    {
        $convocatoria = Convocatoria::where('id', '=', $id)->firstOrFail();
        $convocatoria->delete();
        return back();
    }


    public function view()
    {
        $convocatorias = Convocatoria::orderBy('titulo')->get();
        return view('convocatorias.publico..index', compact('convocatorias'));
    }
}
