<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Formulario;

class FormularioComponent extends Controller
{
    public function index($id)
    {
        $formularios = Formulario::where('formulario_id', '=', $id);
        return view('formularios.index', compact('formularios'));
    }

    public function edit($id)
    {
        $formulario = Formulario::where('id', '=', $id)->firstOrFail();
        return view('formularios.edit', compact('formulario'));
    }

    public function update(Request $request, $id)
    {
        $formulario = Formulario::find($id);

        $formulario->titulo = $request->input('titulo');
        $formulario->description = $request->input('description');
        $formulario->fechaIni = $request->input('fechaIni');
        $formulario->fechaFin = $request->input('fechaFin');
        $formulario->save();

        return redirect('home');
    }

    public function destroy($id)
    {
        $formulario = Formulario::where('id', '=', $id)->firstOrFail();
        $formulario->delete();
        return back();
    }
}
