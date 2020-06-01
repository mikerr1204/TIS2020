<?php

namespace App\Http\Controllers;

use App\Documentos;
use Illuminate\Http\Request;

class DocumentosController extends Controller
{
    public function index()
    {
        $documentos = Documentos::where('convocatoria_id', '=', $id)->get();
        // $documentos = Documentos::orderBy('detalles')->get();
        return view('convocatorias.documentos.index', compact('documentos'));
    }

    public function create()
    {
        return view('convocatorias.documentos.create');
    }

    public function store(Request $request)
    {
        $documentos = new Documentos();
        $documentos->detalles = $request->input('detalles');
        $documentos->obligatorio = $request->input('obligatorio');
        $documentos->save();

        return redirect('documentos');
    }

    public function show($id)
    {
        $documentos = Documentos::where('id', '=', $id)->firstOrFail();
        return view('convocatorias.documentos.show', compact('documentos'));
    }

    public function edit($id)
    {
        $documentos = Documentos::where('id', '=', $id)->firstOrFail();
        return view('convocatorias.documentos.edit', compact('documentos'));
    }

    public function details($id)
    {
        $documentos = Documentos::where('id', '=', $id)->firstOrFail();
        return view('convocatoria.documentos.details', compact('documentos'));
    }

    public function update(Request $request, $id)
    {
        $documentos = Documentos::find($id);

        $documentos->detalles = $request->input('detalles');
        $documentos->obligatorio = $request->input('obligatorio');
        $documentos->save();

        return redirect('documentos');
    }

    public function destroy($id)
    {
        $documentos = Documentos::where('id', '=', $id)->firstOrFail();
        $documentos->delete();
        return back();
    }
}
