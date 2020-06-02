<?php

namespace App\Http\Controllers;

use App\Documentos;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;

class DocumentosController extends Controller
{
    public function index($convocatoria_id)
    {
        $documentos = Documentos::where('convocatoria_id', $convocatoria_id)->get();
        // $documentos = Documentos::orderBy('detalles')->get();
        return view('convocatorias.documentos.index', compact('documentos', 'convocatoria_id'));
    }

    public function create($convocatoria_id)
    {
        return view('convocatorias.documentos.create', compact('convocatoria_id'));
    }

    public function store(Request $request, $convocatoria_id)
    {
        $documentos = new Documentos();
        $documentos->detalles = $request->input('detalles');
        $documentos->convocatoria_id = $convocatoria_id;
        $documentos->obligatorio = $request->input('obligatorio');
        $documentos->save();

        return redirect()->route('documentos.index', ['convocatoria_id' => $convocatoria_id]);
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

    public function update(Request $request, $id)
    {
        $documentos = Documentos::find($id);

        $convocatoria_id = $documentos->convocatoria_id;

        $documentos->detalles = $request->input('detalles');
        $documentos->obligatorio = $request->input('obligatorio');
        $documentos->save();

        return redirect()->route('documentos.index', ['convocatoria_id' => $convocatoria_id]);
    }

    public function destroy($id)
    {
        $documentos = Documentos::where('id', '=', $id)->firstOrFail();
        $documentos->delete();
        return back();
    }
}
