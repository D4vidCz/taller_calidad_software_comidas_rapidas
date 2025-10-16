@extends('layout')

@section('title', 'Editar Producto')

@section('content')
<div class="card">
  <h1>Editar Producto</h1>
  <form action="{{ route('productos.update', $producto->id) }}" method="POST">
    @csrf
    @method('PUT')

    <label>Nombre</label>
    <input type="text" name="nombre" value="{{ $producto->nombre }}" required>

    <label>Stock</label>
    <input type="number" name="stock" value="{{ $producto->stock }}" required>

    <label>Precio</label>
    <input type="number" step="0.01" name="precio" value="{{ $producto->precio }}" required>

    <label>Tipo de Producto</label>
    <select name="tipo_producto_id" required>
      @foreach($tipos as $tipo)
        <option value="{{ $tipo->id }}" {{ $producto->tipo_producto_id == $tipo->id ? 'selected' : '' }}>
          {{ $tipo->nombre }}
        </option>
      @endforeach
    </select>

    <button type="submit" class="btn-primary">Actualizar</button>
    <a href="{{ route('productos.index') }}" class="btn-secondary">Volver</a>
  </form>
</div>
@endsection
