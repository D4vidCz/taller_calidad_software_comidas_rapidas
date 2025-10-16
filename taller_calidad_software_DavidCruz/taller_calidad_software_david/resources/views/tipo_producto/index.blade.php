@extends('layout')

@section('title', 'Tipos de Producto')

@section('content')
<div class="card">
  <h1>Tipos de Producto</h1>
  <a href="{{ route('tipoproductos.create') }}" class="btn-primary">➕ Nuevo Tipo</a>

  @if (session('success'))
    <div class="alert-success">{{ session('success') }}</div>
  @endif

  <table>
    <thead>
      <tr>
        <th>ID</th>
        <th>Nombre</th>
        <th>Acciones</th>
      </tr>
    </thead>
    <tbody>
      @foreach ($tipos as $t)
      <tr>
        <td>{{ $t->id }}</td>
        <td>{{ $t->nombre }}</td>
        <td>
          <a href="{{ route('tipoproductos.edit', $t->id) }}" class="btn-edit">✏️</a>
          <form action="{{ route('tipoproductos.destroy', $t->id) }}" method="POST" style="display:inline;">
            @csrf @method('DELETE')
            <button type="submit" class="btn-delete">🗑️</button>
          </form>
        </td>
      </tr>
      @endforeach
    </tbody>
  </table>
</div>
@endsection
