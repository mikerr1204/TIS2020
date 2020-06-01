<?php

namespace App\Http\Controllers;

use App\Meritos;
use Illuminate\Http\Request;

class MeritosController extends Controller
{
    public function index($id)
    {
        $meritos = Meritos::where('convocatoria_id', '=', $id);
        // $meritos = Meritos::orderBy('detalles')->get();
        return view('convocatorias.meritos.index', compact('meritos'));
    }

    public function create()
    {
        return view('convocatorias.meritos.create');
    }

    public function store(Request $request)
    {
        $meritos = new Meritos();
        $meritos->detalles = $request->input('detalles');
        $meritos->obligatorio = $request->input('obligatorio');
        $meritos->save();

        return redirect('meritos');
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

    public function details($id)
    {
        $meritos = Meritos::where('id', '=', $id)->firstOrFail();
        return view('convocatoria.meritos.details', compact('meritos'));
    }

    public function update(Request $request, $id)
    {
        $meritos = Meritos::find($id);

        $meritos->detalles = $request->input('detalles');
        $meritos->obligatorio = $request->input('obligatorio');
        // $meritos->cabezal = $request->input('obligatorio');
        // $meritos->nivel = $request->input('obligatorio');
        // $meritos->subnivel = $request->input('obligatorio');
        $meritos->save();

        return redirect('meritos');
    }

    public function destroy($id)
    {
        $meritos = Meritos::where('id', '=', $id)->firstOrFail();
        $meritos->delete();
        return back();
    }
}
