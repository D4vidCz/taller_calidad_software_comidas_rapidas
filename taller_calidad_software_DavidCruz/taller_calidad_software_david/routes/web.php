<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\TipoProductoController;
use App\Http\Controllers\ProductoController;
use Illuminate\Support\Facades\Session;

// Página de login (temporalmente sin autenticación real)
Route::get('/', function () {
    return view('auth.login');
})->name('login');

Route::post('/login', function () {
    return redirect()->route('dashboard');
})->name('login.post');

Route::post('/logout', function () {
    Session::flush(); // Limpia la sesión
    return redirect()->route('login'); // Redirige al login
})->name('logout');

// Dashboard principal
Route::get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');

// CRUD de Productos
Route::resource('productos', ProductoController::class);
Route::resource('producto', ProductoController::class);



// CRUD de Tipos de Producto
Route::resource('tipoproductos', TipoproductoController::class);
Route::resource('tipo_producto', TipoProductoController::class);
