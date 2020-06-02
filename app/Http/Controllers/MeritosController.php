<?php

namespace App\Http\Controllers;

use App\Meritos;
use Illuminate\Http\Request;

class MeritosController extends Controller
{
    public function index($convocatoria_id)
    {
        $meritos = Meritos::where('convocatoria_id', $convocatoria_id)->get();
        // $meritos = Meritos::orderBy('detalles')->get();
        return view('convocatorias.meritos.index', compact('meritos', 'convocatoria_id'));
    }

    public function create($convocatoria_id)
    {
        return view('convocatorias.meritos.create', compact('convocatoria_id'));
    }

    public function store(Request $request, $convocatoria_id)
    {
        $meritos = new Meritos();
        $meritos->detalles = $request->input('detalles');
        $meritos->cabezal = 'Prueba';
        $meritos->nivel = 'Prueba';
        $meritos->subnivel = 'Prueba';
        $meritos->convocatoria_id = $convocatoria_id;
        $meritos->obligatorio = $request->input('obligatorio');
        $meritos->save();

        return redirect()->route('meritos.index', ['convocatoria_id' => $convocatoria_id]);
    }

    public function show($id)
    {
        $meritos = Meritos::where('id', '=', $id)->firstOrFail();
        return view('convocatorias.meritos.show', compact('meritos'));
    }

    public function edit($id)
    {
        $meritos = Meritos::where('id', '=', $id)->firstOrFail();
        return view('convocatorias.meritos.edit', compact('meritos'));
    }

    public function update(Request $request, $id)
    {
        $meritos = Meritos::find($id);

        $convocatoria_id = $meritos->convocatoria_id;

        $meritos->detalles = $request->input('detalles');
        $meritos->obligatorio = $request->input('obligatorio');
        $meritos->save();

        return redirect()->route('meritos.index', ['convocatoria_id' => $convocatoria_id]);
    }

    public function destroy($id)
    {
        $meritos = Meritos::where('id', '=', $id)->firstOrFail();
        $meritos->delete();
        return back();
    }
}
