@extends('layout')

@section('content')
<div class="container">
    <h1>Registrar Tipo de Producto</h1>

    <form action="{{ route('tipoproductos.store') }}" method="POST" class="formulario">
        @csrf
        <div class="form-group">
            <label for="nombre">Nombre del tipo de producto:</label>
            <input type="text" name="nombre" id="nombre" required>
        </div>

        <button type="submit" class="btn-guardar">Guardar</button>
        <a href="{{ route('tipoproductos.index') }}" class="btn-volver">Volver</a>
    </form>
</div>
@endsection
