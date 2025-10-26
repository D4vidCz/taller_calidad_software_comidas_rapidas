@extends('layout')

@section('title', 'Nuevo Producto')

@section('content')
<head>
  <title>Form Producto</title>
  <link rel="stylesheet" href="{{ asset('css/producto-create.css') }}">
</head>

<div class="card">
  <h1>Crear Producto</h1>
  <form action="{{ route('productos.store') }}" method="POST">
    @csrf

    <label for="nombre">Nombre</label>
    <input type="text" id="nombre" name="nombre" required>

    <label for="stock">Stock</label>
    <input type="number" id="stock" name="stock" required>

    <label for="precio">Precio</label>
    <input type="number" id="precio" name="precio" step="0.01" required>

    <label for="tipo_producto_id">Tipo de Producto</label>
    <select id="tipo_producto_id" name="tipo_producto_id" required>
      @foreach($tipos as $tipo)
        <option value="{{ $tipo->id }}">{{ $tipo->nombre }}</option>
      @endforeach
    </select>

    <button type="submit" class="btn-primary">Guardar</button>
    <a href="{{ route('productos.index') }}" class="btn-secondary">Cancelar</a>
  </form>
</div>
@endsection
