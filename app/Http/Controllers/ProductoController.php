<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductoController extends Controller
{
    public function index(){
        return "Lista de productos";
    }

    public function show($id){
        return "Detalles del producto con ID: $id";
    }
}
