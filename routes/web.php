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

Route::get('/', function () {
    return view('welcome');
});

Route::get('bienvenido', function () {
    $noticias = [
        [   'id' => '1',
            'titulo' => 'Vista Pastoral', 
            'descripcion' => ' Pastor distrital llegara de sisita.'],
        [   'id' => '2',
            'titulo' => 'vista Pastoral',
            'descripcion' => 'Visita a la U.']
    ];
    return view('noticia', ['noticias'=> $noticias]);

});

Route::get('usuario', function () {
    $usuario = [
        [   "nombre" => "Daniel",
            "edad" => 21 ]

    ];
    return view('usuario', ['usuario'=> $usuario]);

});



