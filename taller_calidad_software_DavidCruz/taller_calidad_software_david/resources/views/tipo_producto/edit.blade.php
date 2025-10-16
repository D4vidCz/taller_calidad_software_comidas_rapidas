@extends('layout')

@section('content')
<div class="container">
    <h1>Editar Tipo de Producto</h1>

    <form action="{{ route('tipoproductos.update', $tipoproducto->id) }}" method="POST" class="formulario">
        @csrf
        @method('PUT')

        <div class="form-group">
            <label for="nombre">Nombre del tipo de producto:</label>
            <input type="text" name="nombre" id="nombre" value="{{ $tipoproducto->nombre }}" required>
        </div>

        <button type="submit" class="btn-guardar">Actualizar</button>
        <a href="{{ route('tipoproductos.index') }}" class="btn-volver">Volver</a>
    </form>
</div>
@endsection
