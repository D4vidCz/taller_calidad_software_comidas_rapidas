<?php

namespace App\Http\Controllers;

use App\Models\Tipoproducto;
use Illuminate\Http\Request;

class TipoProductoController extends Controller
{
    public function index()
    {
        $tipos = Tipoproducto::all();
        return view('tipo_producto.index', compact('tipos'));
    }

    public function create()
    {
        return view('tipo_producto.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nombre' => 'required|string|max:255'
        ]);

        Tipoproducto::create($request->all());
        return redirect()->route('tipo_producto.index')->with('success', 'Tipo de producto creado correctamente.');
    }

    public function edit(Tipoproducto $tipoproducto)
    {
        return view('tipo_producto.edit', compact('tipoproducto'));
    }

    public function update(Request $request, Tipoproducto $tipoproducto)
    {
        $request->validate([
            'nombre' => 'required|string|max:255'
        ]);

        $tipoproducto->update($request->all());
        return redirect()->route('tipo_producto.index')->with('success', 'Tipo de producto actualizado correctamente.');
    }

    public function destroy(Tipoproducto $tipoproducto)
    {
        $tipoproducto->delete();
        return redirect()->route('tipo_producto.index')->with('success', 'Tipo de producto eliminado correctamente.');
    }
}
