<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use App\Models\User;
use Illuminate\Support\Facades\View;

class ControladorPaginas extends Controller
{

    public function getWelcome(){
        return view('welcome');
    }

    public function getVerPublis($categoria, $num){
        if($categoria=='Destinos'){
            $posts = Post::where('categoria', 'Destinos')->get();
        }else{
            $posts = Post::where('categoria', 'Comida')->get();
        }
        $publi = $posts->first(function ($post) use ($num) {
            return $post->id == $num;
        });
        return View::make('verPublis')->with('posts',$posts)->with('publi',$publi)->with('categoria',$categoria);
    }

    public function getPostear(){
        return view('postear');
    }

    public function getCategorias(){
        return view('categorias');
    }

    public function getAutor($num){
        $autores = User::where('rol', 'admin')->get();
        $autor = $autores->first(function ($autor) use ($num) {
            return $autor->id == $num;
        });
        return View::make('autor')->with('autor',$autor);
    }
}
