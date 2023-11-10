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

    public function getVerPublis($categoria, $publi){
        if($categoria=='Destinos'){
            $posts = Post::where('categoria', 'Destinos')->get();
        }else{
            $posts = Post::where('categoria', 'Comida')->get();
        }
        return View::make('verPublis')->with('posts',$posts);
    }

    public function getPostear(){
        return view('postear');
    }

    public function getCategorias(){
        return view('categorias');
    }

    public function getAutor(){
        return view('autor');
    }

}
