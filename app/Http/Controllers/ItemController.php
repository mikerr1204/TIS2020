<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\merito;
use App\Item;

class ItemController extends Controller
{
    public function index($merito_id)
    {
        $items = Item::where('merito_id', $merito_id)->get();
        $merito = merito::where('id', '=', $merito_id)->firstOrFail();
        return view('items.index', compact('items', 'merito'));
    }

    public function create($merito)
    {
        return view('items.create', compact('merito'));
    }

    public function store(Request $request, $merito_id)
    {
        $item = new Item();
        $item->merito_id = $merito_id;
        $item->descripcion = $request->input('descripcion');
        $item->valor = $request->input('valor');
        $item->save();
        return redirect('meritos')->with('confirmacion','item Registrado Correctamente');
    }

    public function show($id)
    {
        $item = Item::where('id', '=', $id)->firstOrFail();
        return view('items.show', compact('item'));
    }

    public function edit($id)
    {
        $item = Item::where('id', '=', $id)->firstOrFail();
        return view('items.edit', compact('item'));
    }

    public function update(Request $request, $id)
    {
        $item = Item::find($id);

        $item->descripcion = $request->input('descripcion');
        $item->valor = $request->input('valor');
        $item->save();

        return redirect('meritos')->with('confirmacion','Item Editado Correctamente');
    }

    public function destroy($id)
    {
        $item = item::where('id', '=', $id)->firstOrFail();
        $item->delete();
        return redirect('meritos')->with('confirmacion','Item Eliminado Corectamente');
    }
}
