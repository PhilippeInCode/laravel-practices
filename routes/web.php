<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductoController;
use App\Http\Controllers\UsuarioController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/productos', [ProductoController::class, 'index']);
Route::get('/productos/{id}', [ProductoController::class, 'show']);

Route::get('/usuarios', [UsuarioController::class, 'index']);
Route::get('/usuarios/{id}', [UsuarioController::class, 'perfil']);

Route::get('/usuarios/crear', [UsuarioController::class, 'create']);
Route::post('/usuarios/guardar', [UsuarioController::class, 'store']);

Route::get('/usuarios/saludo/{nombre}', [UsuarioController::class, 'saludo']);