<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class PostController extends Controller
{

    public function index(){
        $posts = Post::all();
        return response()->json($posts);
    }

    public function store(Request $request)
    {
        // Validar los datos antes de insertarlos
        $request->validate([
            'title' => 'required|string|max:255',
            'content' => 'required|string'
        ]);

        // Crear un nuevo post utilizando Eloquent
        $post = Post::create([
            'title' => $request->title,
            'content' => $request->content
        ]);

        return response()->json([
            'message' => 'Post creado exitosamente',
            'post' => $post
        ], 201);
    }

    public function update(Request $request, $id){
        $post = Post::findOrFail($id);
        $post->update([
            'tittle' => $request->tittle,
            'content' => $request
        ]);
        return response()->json($post);
    }

    public function destroy($id){
        $post = Post::findOrFail($id);
        $post->delete();

        return response()->json(['message' => 'Post eliminado correctamente']);
    }
}
