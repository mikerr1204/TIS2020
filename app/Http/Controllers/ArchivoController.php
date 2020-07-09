<?php

namespace App\Http\Controllers;

use App\Archivo;
use App\Documento;
use App\Postulation;
use App\Convocatoria;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class ArchivoController extends Controller
{
    public function index()
    {
        $user = Auth::user();
        $postulations = Postulation::where('user_id', '=', $user->id)->get();
        return view('archivos.index', compact('postulations'));
    }

    public function create()
    {
        //
    }

    public function store(Request $request)
    {
        $user = Auth::user();
        $rol = $user->roles->where('name','=','Postulante')->count();
        if ($rol == 1) {
            $postulations = $user->postulations->count();
            if ($postulations != 0) {
                $documento = Documento::find($request->documento_id);
                $convocatoria = Convocatoria::find($documento->convocatoria_id);
                $postulation = Postulation::where('user_id','=',$user->id)->where('convocatoria_id','=',$convocatoria->id)->firstOrFail();
                $archivos = Archivo::where('documento_id','=',$request->documento_id)->where('postulation_id','=',$postulation->id)->count();

                if ($archivos == 0) {
                    $archivo = new Archivo();
                    $archivo->validacion = 'en revision';
                    $archivo->titulo=$request->input('titulo');
                    $archivo->documento_id=$request->input('documento_id');
                    $archivo->postulation_id=$postulation->id;

                    if($request->file('file')){
                        $path = Storage::disk('public')->put('documentosA',  $request->file('file'));
                        $archivo->fill(['file' => asset($path)])->save();
                    }
                    $archivo->save();

                    return back()->with('confirmacion','Archivo subido Correctamente');
                } else {
                    return back()->with('negacion','Documento ya subido');
                }
            } else {
                return back()->with('negacion','Primero debe postularse');
            }
        } else {
            return back()->with('negacion','Solo para postulantes');
        }


    }

    public function showArchivoDocumentos($postulation_id)
    {
        $archivos = Archivo::where('postulation_id', '=', $postulation_id)->get();
        $postulation = Postulation::where('id', '=', $postulation_id)->firstOrFail();
        return view('archivos.index', compact('archivos', 'postulation'));
    }

    public function edit($id)
    {
        $archivo = Archivo::where('id', '=', $id)->firstOrFail();
        return view('archivos.edit', compact('archivo'));
    }

    public function update(Request $request, $id)
    {
        //
    }

    public function validar(Request $request, $id) {
        $archivo = Archivo::find($id);
        $archivo->validacion = $request->input('validacion');
        $archivo->save();
        return redirect('convocatorias')->with('confirmacion','Validacion Editado Correctamente');
    }

    public function viewPDF($id) {
        $archivo = Archivo::find($id)->firstOrFail();
        $file = strrchr($archivo->file, '/');
        $path = public_path('documentosA'.$file);
        return response()->file($path);
        return view('archivos.viewPDF', compact('path', 'archivo'));
        // return  response()->download(public_path('meritosA'.$file));
    }

    public function destroy($id)
    {
        $archivo = Archivo::where('id', '=', $id)->firstOrFail();
        $archivo->delete();
        return back()->with('confirmacion','Archivo Eliminado Corectamente');
    }
}
