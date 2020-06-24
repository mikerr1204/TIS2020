<?php

namespace App\Http\Controllers;

use App\Certificado;
use App\Merito;
use App\Postulation;
use App\Convocatoria;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class CertificadoController extends Controller
{
    public function index()
    {

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
                $merito = Merito::find($request->merito_id);
                $convocatoria = Convocatoria::find($merito->convocatoria_id);
                $postulation = Postulation::where('user_id','=',$user->id)->where('convocatoria_id','=',$convocatoria->id)->firstOrFail();

                $certificado = new Certificado();
                $certificado->name=$request->input('name');
                $certificado->puntaje=$this->detectarPuntaje($request->input('tipo'));
                $certificado->merito_id=$request->input('merito_id');
                $certificado->postulation_id=$postulation->id;

                if($request->file('file')){
                    $path = Storage::disk('public')->put('meritosA',  $request->file('file'));
                    $certificado->fill(['file' => asset($path)])->save();
                }
                $certificado->save();

                return back()->with('confirmacion','Merito subido Correctamente');
            } else {
                return back()->with('negacion','Primero debe postularse');
            }
        } else {
            return back()->with('negacion','Solo para postulantes');
        }
    }

    private function detectarPuntaje(string $tipo) {
        $puntaje = 0;
        if ($tipo == 'docente') {
            $puntaje = 2;
        } else if ($tipo == 'invalido') {
            $puntaje = 0;
        } else {
            $puntaje = 1;
        }

        return $puntaje;
    }

    public function showCertificados($postulation_id)
    {
        $certificados = Certificado::where('postulation_id', '=', $postulation_id)->get();
        return view('certificados.index', compact('certificados'));
    }

    public function edit($id)
    {
        $certificado = Certificado::where('id', '=', $id)->firstOrFail();
        return view('certificados.edit', compact('certificado'));
    }

    public function update(Request $request, $id)
    {
        $certificado = Certificado::find($id);

        $certificado->puntaje = $request->input('puntaje');;
        $certificado->save();

        return redirect('convocatorias')->with('confirmacion','Puntaje Cambiado Correctamente');
    }

    public function viewPDF($id) {
        $certificado = Certificado::find($id)->firstOrFail();
        $file = strrchr($certificado->file, '/');
        $path = public_path('meritosA'.$file);
        return response()->file($path);
        return view('certificados.viewPDF', compact('path', 'certificado'));
        // return  response()->download(public_path('meritosA'.$file));
    }

    public function destroy($id)
    {
        $certificado = Certificado::where('id', '=', $id)->firstOrFail();
        $certificado->delete();
        return back()->with('confirmacion','Certificado Eliminado Corectamente');
    }
}
