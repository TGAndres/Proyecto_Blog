<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ControladorPaginas extends Controller
{
    public function getWelcome(){
        return view('welcome');
    }

    public function getVerPublis(){
        return view('verPublis');
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
