<?php

namespace App\Http\Controllers;

use App\Documento;
use Illuminate\Http\Request;

class DocumentoController extends Controller
{
    public function index()
    {
        $documentos = Documento::orderBy('id')->get();
        return view('documentos.index', compact('documentos'));
    }

    public function create()
    {
        return view('documentos.create');
    }

    public function store(Request $request)
    {
        $documento = new Documento();
        $documento->descripcion = $request->input('descripcion');
        $documento->importancia = $request->input('importancia');
        $documento->convocatoria_id = $request->input('convocatoria_id');
        $documento->save();
        return back()->with('confirmacion','Documento Registrado Correctamente');
    }

    public function show($id)
    {
        $documento = Documento::where('id', '=', $id)->firstOrFail();
        return view('documentos.show', compact('documento'));
    }

    public function edit($id)
    {
        $documento = Documento::where('id', '=', $id)->firstOrFail();
        return view('documentos.edit', compact('documento'));
    }

    public function update(Request $request, $id)
    {
        $documento = Documento::find($id);

        $documento->descripcion = $request->input('descripcion');
        $documento->importancia = $request->input('importancia');
        $documento->convocatoria_id = $request->input('convocatoria_id');
        $documento->save();

        return redirect('documentos')->with('confirmacion','Documento Editado Correctamente');
    }

    public function destroy($id)
    {
        $documento = Documento::where('id', '=', $id)->firstOrFail();
        $documento->delete();
        return back()->with('confirmacion','Documento Eliminado Corectamente');
    }
}
