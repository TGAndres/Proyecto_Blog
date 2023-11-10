<?php

namespace App\Http\Controllers;
use App\Models\Post;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ControladorPost extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('postear');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $this->validate($request, array(
            'titulo' => 'required',
            'contenido' => 'required',
            'categoria' => 'required',
            'imagen' => 'required',
        ));
        $usuario = Auth::user();

        $post = new Post;
        $post->titulo = $request->titulo;
        $post->user_id = $usuario->id;
        $post->contenido = $request->contenido;
        $post->categoria = $request->categoria;
        $post->comentarios = json_encode([]);
        $post->imagen = $request->imagen;
        $post->likes = 0;

        $post->save();

        return view('welcome');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
