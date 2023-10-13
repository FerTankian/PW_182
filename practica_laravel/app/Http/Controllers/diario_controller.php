<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class diario_controller extends Controller
{
    public function metodo_inicio(){
        return view('welcome');

    }
    public function metodo_formulario(){
        return view('formulario');
        
    }
    public function metodo_recuerdo(){
        return view('recuerdos');
        
    }
}
