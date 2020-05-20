<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Convocatoria;

class ConvocatoriasController extends Controller
{
    public function registrarConvocatoria(Request $request)
    {
        $idConvocatoria = trim($request->idConvocatoria);
        $nombreConvocatoria = trim($request->nombreConvocatoria);
        $convocatoria = Convocatoria::find($codConvocatoria);
        if ($convocatoria == null) {
            $convocatoria = new Convocatoria();
            $convocatoria->codConvocatoria = $idConvocatoria;
            $convocatoria->nombreConvocatoria = $nombreConvocatoria;
            $convocatoria->fechaInicio = $fechaInico;
            $convocatoria->fechaFin = $fechaFin;
            $convocatoria->save();
            return redirect('')->with('mat_reg_successful', 'Convocatoria registrada exitosamente');
        }
        return back()->withInput();
    }

    public function verificarIdConvocatoria(Request $request)
    {
        $idConvocatoria = $request->idConvocatoria;
        $convocatoria = Convocatoria::find($idConvocatoria);
        $existe = true;
        if ($convocatoria == null) {
            $existe = false;
        }
        return response()->json(['existe' => $existe]);
    }

    public function verificarNombreConvocatoria(Request $request)
    {
        $nombreConvocatoria = $request->nombreConvocatoria;
        $convocatoria = Convocatoria::where('nombreConvocatoria', $nombreConvocatoria)->first();
        $existe = true;
        if ($convocatoria == null) {
            $existe = false;
        }
        return response()->json(['existe' => $existe]);
    }

    public function formularioRegistrarConvocatoria()
    {
        return view('convocatoria');
    }

}
