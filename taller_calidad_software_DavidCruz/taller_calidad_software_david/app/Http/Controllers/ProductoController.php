<?php

namespace App\Http\Controllers;

use App\Models\Producto;
use App\Models\Tipoproducto;
use Illuminate\Http\Request;

class ProductoController extends Controller
{
    public function index()
    {
        $productos = Producto::with('tipoproducto')->get();
        return view('producto.index', compact('productos'));
    }

    public function create()
    {
        $tipos = Tipoproducto::all();
        return view('producto.create', compact('tipos'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'nombre' => 'required|string|max:255',
            'stock' => 'required|integer|min:0',
            'precio' => 'required|numeric|min:0',
            'tipo_producto_id' => 'required|exists:tipoproductos,id',
        ]);

        Producto::create($request->all());
        return redirect()->route('producto.index')->with('success', 'Producto creado correctamente.');
    }

    public function edit(Producto $producto)
    {
        $tipos = Tipoproducto::all();
        return view('producto.edit', compact('producto', 'tipos'));
    }

    public function update(Request $request, Producto $producto)
    {
        $request->validate([
            'nombre' => 'required|string|max:255',
            'stock' => 'required|integer|min:0',
            'precio' => 'required|numeric|min:0',
            'tipo_producto_id' => 'required|exists:tipoproductos,id',
        ]);

        $producto->update($request->all());
        return redirect()->route('producto.index')->with('success', 'Producto actualizado correctamente.');
    }

    public function destroy(Producto $producto)
    {
        $producto->delete();
        return redirect()->route('producto.index')->with('success', 'Producto eliminado correctamente.');
    }
}
