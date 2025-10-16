<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>@yield('title', 'Panel')</title>
  <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>
<body>
  <nav class="navbar">
    <h2>Panel de Administración</h2>
    <div>
      <a href="{{ route('productos.index') }}">Productos</a>
      <a href="{{ route('tipoproductos.index') }}">Tipos de Producto</a>
    </div>
  </nav>

  <main class="content">
    @yield('content')
  </main>
</body>
</html>
