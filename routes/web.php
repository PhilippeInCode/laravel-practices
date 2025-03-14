<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductoController;
use App\Http\Controllers\UsuarioController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Http\Controllers\PostController;

Route::get('/welcome', function () {
    return view('welcome');
});

Route::get('/saludo', function() {
    $nombre = "Felipe";
    return view('saludo', ['nombre' => $nombre]);
});

Route::get('/usuario', function() {
    $usuario = "Admin";
    return view('usuario', compact('usuario'));
});

Route::get('/productosTech', function () {
    $productos = ["Laptop", "Teléfono", "Tablet", "Monitor"];
    return view('productosTech', compact('productos'));
});

Route::get('/home', function () {
    return view('home');
});

Route::post('/validar-formulario', function (Request $request) {
    $validator = Validator::make($request->all(), [
        'nombre' => 'required|min:3',
        'correo' => 'required|email',
        'telefono' => 'required|digits:10',
        'password' => 'required|min:6|confirmed',
        'edad' => 'required|integer|min:18',
        'direccion' => 'required',
        'ciudad' => 'required',
        'pais' => 'required',
        'codigo_postal' => 'required|numeric',
    ]);

    if ($validator->fails()) {
        return back()->withErrors($validator)->withInput();
    }

    return "Formulario enviado correctamente";
})->name('validar.formulario');

Route::get('/productos', [ProductoController::class, 'index']);
Route::get('/productos/{id}', [ProductoController::class, 'show']);

Route::get('/usuarios', [UsuarioController::class, 'index']);
Route::get('/usuarios/{id}', [UsuarioController::class, 'perfil']);

Route::get('/usuarios/crear', [UsuarioController::class, 'create']);
Route::post('/usuarios/guardar', [UsuarioController::class, 'store']);

Route::get('/usuarios/saludo/{nombre}', [UsuarioController::class, 'saludo']);

Route::get('/posts', [PostController::class, 'index']);
Route::post('posts', [PostController::class, 'store']);
Route::put('post/{id}', [PostController::class, 'update']);
Route::delete('post/{id}', [PostController::class, 'detroy']);