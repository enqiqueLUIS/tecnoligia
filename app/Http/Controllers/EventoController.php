<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EventoController extends Controller
{
    //
    public function index(){
        $eventos = Evento ::get();
        return view('evento',['eventos'=> $eventos]);
    }
}
