<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UsuarioController extends Controller
{
    public function index(){
        return "Lista de usuarios";
    }

    public function perfil($id){
        return "Perfil del usuario con ID: $id";
    }

    public function create()
    {
        return view('usuarios.create');
    }
    
    public function store(Request $request)
    {
        return "Nombre recibido: " . $request->input('nombre');
    }

    public function saludo($nombre){
        return view ('usuarios.saludo', ['nombre' => $nombre]);
    }
}
