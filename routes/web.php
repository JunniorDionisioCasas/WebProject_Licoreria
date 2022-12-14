<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('vistas/age_confirmation');
});

Route::get('/home', function () {
    return view('index');
});

Route::get('/productos', function () {
    return view('vistas/productos/productos', ['name' => 'productos']);
});

Route::get('/detalle-producto', function () {
    return view('vistas/productos/detalle-producto');
});

Route::get('/carrito_compras', function () {
    return view('vistas/carrito_compras');
})->middleware('auth');

Route::get('/pago', function () {
    return view('vistas/pasarela_pago');
})->middleware('auth');

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('index');
    })->name('dashboard');

    Route::get('/historial_compras', function () {
        return view('vistas/user/shopping_history');
    })->name('mis_compras');
});
