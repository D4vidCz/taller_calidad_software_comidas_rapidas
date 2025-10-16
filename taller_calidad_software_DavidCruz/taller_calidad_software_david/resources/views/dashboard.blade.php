<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Panel de Administración</title>
  <link rel="stylesheet" href="{{ asset('css/dashboard.css') }}">
</head>
<body>
  <div class="dashboard-container">
    <!-- Sidebar -->
    <aside class="sidebar">
      <h2>Usuario</h2>
      <ul>
        <li><a href="{{ route('productos.index') }}">🛒 Productos</a></li>
        <li><a href="{{ route('tipoproductos.index') }}">📦 Tipos de Producto</a></li>
      </ul>
      <form action="{{ route('logout') }}" method="POST">
        @csrf
        <button class="logout-btn">Cerrar sesión</button>
      </form>
    </aside>

    <!-- Contenido principal -->
    <main class="main-content">
      <header class="header">
        <h1>Panel Principal</h1>
        <p>Bienvenido {{ Auth::user()->name ?? 'Usuario' }}</p>
      </header>

      <section class="cards-container">
        <div class="card">
          <h3>Productos</h3>
          <p>Administra los productos disponibles en tu inventario.</p>
          <a href="{{ route('productos.index') }}" class="btn">Ir a Productos</a>
        </div>

        <div class="card">
          <h3>Tipos de Producto</h3>
          <p>Gestiona las categorías y tipos de productos.</p>
          <a href="{{ route('tipoproductos.index') }}" class="btn">Ir a Tipos</a>
        </div>

      </section>
    </main>
  </div>
</body>
</html>
