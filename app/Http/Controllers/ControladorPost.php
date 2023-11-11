<?php

namespace App\Http\Controllers;
use App\Models\Post;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\View;

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

        if($usuario->rol=='admin'){
            $post->save();
        }
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
    public function update(Request $request, $id)
    {
        $posts = Post::all();
        $registro = $posts->first(function ($registro) use ($id) {
            return $registro->id == $id;
        });

        if($registro->categoria=='Destinos'){
            $posts2 = Post::where('categoria', 'Destinos')->get();
        }else{
            $posts2 = Post::where('categoria', 'Comida')->get();
        }

        $json = json_decode($registro->comentarios,true);
        $usuario = Auth::user();
        $json[$usuario->name] = ($usuario->name).' : '.($request->comentario);
        $jsonM=json_encode($json);
        $registro->update(['comentarios'=>$jsonM]);

        return View::make('verPublis')->with('posts',$posts2)->with('publi',$registro)->with('categoria',$registro->categoria);
    }

    public function update2(Request $request, string $id){
        $posts = Post::all();
        $registro = $posts->first(function ($registro) use ($id) {
            return $registro->id == $id;
        });

        if($registro->categoria=='Destinos'){
            $posts2 = Post::where('categoria', 'Destinos')->get();
        }else{
            $posts2 = Post::where('categoria', 'Comida')->get();
        }

        $maslikes= $registro->likes +1;

        $registro->update(['likes'=>$maslikes]);

        return View::make('verPublis')->with('posts',$posts2)->with('publi',$registro)->with('categoria',$registro->categoria);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
