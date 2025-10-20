@extends('layout')

@section('title', 'Nuevo Producto')

@section('content')
<head>
    <link rel="stylesheet" href="{{ asset('css/producto-create.css') }}">
</head>
<div class="card">
  <h1>Crear Producto</h1>
  <form action="{{ route('productos.store') }}" method="POST">
    @csrf
    <label>Nombre</label>
    <input type="text" name="nombre" required>

    <label>Stock</label>
    <input type="number" name="stock" required>

    <label>Precio</label>
    <input type="number" step="0.01" name="precio" required>

    <label>Tipo de Producto</label>
    <select name="tipo_producto_id" required>
      @foreach($tipos as $tipo)
        <option value="{{ $tipo->id }}">{{ $tipo->nombre }}</option>
      @endforeach
    </select>

    <button type="submit" class="btn-primary">Guardar</button>
    <a href="{{ route('productos.index') }}" class="btn-secondary">Cancelar</a>
  </form>
</div>
@endsection
