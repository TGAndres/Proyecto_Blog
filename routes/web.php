<?php

use Illuminate\Support\Facades\Route;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Auth::routes();

Route::get('/welcome', [App\Http\Controllers\ControladorPaginas::class, 'getWelcome'])->name('welcome');

Route::get('/', [App\Http\Controllers\ControladorPaginas::class, 'getWelcome'])->name('welcome');

Route::get('/categorias', [App\Http\Controllers\ControladorPaginas::class, 'getCategorias'])->name('categorias');

Route::get('/autor', [App\Http\Controllers\ControladorPaginas::class, 'getAutor'])->name('autor');

Route::get('/postear', [App\Http\Controllers\ControladorPaginas::class, 'getPostear'])->name('postear');

Route::get('/verPublis', [App\Http\Controllers\ControladorPaginas::class, 'getVerPublis'])->name('verPublis');

Route::post('/posts.store', [App\Http\Controllers\ControladorPost::class, 'store'])->name('posts.store');