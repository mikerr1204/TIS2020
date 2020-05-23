<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use App\Postulation;
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
        //
    }

    public function show(Postulation $postulation)
    {
        //
    }

    public function edit(Postulation $postulation)
    {
        //
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
        $user = Auth::user();

        $postulation = new Postulation();
        $postulation->convocatoria_id = $id;
        $postulation->user_id = $user->id;
        $postulation->save();

        // return redirect('roles');
        
        return back();
    }
}
