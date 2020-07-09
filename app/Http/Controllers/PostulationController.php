<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Caffeinated\Shinobi\Models\Role;
use App\Postulation;
use App\Convocatoria;
use App\Codigo;
use Illuminate\Http\Request;

class PostulationController extends Controller
{
    public function index()
    {
        $user = Auth::user();
        $postulations = Postulation::where('user_id', '=', $user->id)->get();
        return view('postulations.index', compact('postulations'));
    }

    public function create()
    {
        //
    }

    public function store(Request $request)
    {
        $user = Auth::user();
        $cont = Postulation::where('user_id','=',$user->id)->where('convocatoria_id','=',$request->convocatoria_id)->count();
        $rol = $user->roles->where('name','=','Postulante')->count();

        if ($rol == 1) {
            if ($cont == 0) {
                $postulation = new Postulation();
                $postulation->convocatoria_id = $request->convocatoria_id;
                $postulation->user_id = $user->id;
                $postulation->save();
                return redirect('convoc')->with('confirmacion','Postulacion Exitosa');
            } else {
                return back()->with('negacion','Ya te postulaste a esta convocatoria');
            }
        } else {
            return back()->with('negacion','Solo para postulantes');
        }
    }

    public function show($id)
    {
        $postulation = Postulation::where('id', '=', $id)->firstOrFail();
        $convocatoria = $postulation->convocatoria;
        $archivos = $postulation->archivos;
        return view('postulations.show', compact('postulation', 'convocatoria', 'archivos'));
    }

    public function postulationsPerConvocatoria ($convocatoria_id) {
        $postulations = Postulation::where('convocatoria_id', '=', $convocatoria_id)->get();
        return view('postulations.perConvocatoria', compact('postulations'));
    }

    public function edit($id)
    {
        $postulation = Postulation::where('id', '=', $id)->firstOrFail();
        return view('postulations.edit', compact('postulation'));
    }

    public function update(Request $request, Postulation $postulation)
    {
        //
    }

    public function destroy(Postulation $postulation)
    {
        //
    }

    public function apply($id)
    {
        $convocatoria = Convocatoria::where('id', '=', $id)->firstOrFail();
        return view('postulations.create', compact('convocatoria'));
    }
}
