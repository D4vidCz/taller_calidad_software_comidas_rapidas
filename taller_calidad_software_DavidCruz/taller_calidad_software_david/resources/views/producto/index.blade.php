@extends('layout')

@section('title', 'Lista de Productos')

@section('content')
<div class="card">
  <h1>Listado de Productos</h1>
  <a href="{{ route('productos.create') }}" class="btn-primary">➕ Nuevo Producto</a>

  @if (session('success'))
    <div class="alert-success">{{ session('success') }}</div>
  @endif

  <table>
    <thead>
      <tr>
        <th>ID</th>
        <th>Nombre</th>
        <th>Stock</th>
        <th>Precio</th>
        <th>Tipo</th>
        <th>Acciones</th>
      </tr>
    </thead>
    <tbody>
      @foreach ($productos as $p)
      <tr>
        <td>{{ $p->id }}</td>
        <td>{{ $p->nombre }}</td>
        <td>{{ $p->stock }}</td>
        <td>${{ number_format($p->precio, 2) }}</td>
        <td>{{ $p->tipoproducto->nombre }}</td>
        <td>
          <a href="{{ route('productos.edit', $p->id) }}" class="btn-edit">✏️ Editar</a>
          <form action="{{ route('productos.destroy', $p->id) }}" method="POST" style="display:inline;">
            @csrf @method('DELETE')
            <button type="submit" class="btn-delete">🗑️ Eliminar</button>
          </form>
        </td>
      </tr>
      @endforeach
    </tbody>
  </table>
</div>
@endsection
