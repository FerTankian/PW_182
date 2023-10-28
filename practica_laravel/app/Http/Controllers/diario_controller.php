<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\validadorFormularioDiario;

class diario_controller extends Controller
{
    public function metodo_inicio(){
        return view('welcome');

    }
    public function metodo_formulario(){
        return view('formulario');
        
    }
    public function metodo_recuerdos(){
        return view('recuerdos');
        
    }
    public function metodo_guardar(validadorFormularioDiario $req){

      /*   $validated = $req->validate([
            'txtTitulo' => 'required|max:25',
            'txtRecuerdo' => 'required|min:5', 
        ]); */
        return redirect('/formulario')->with('confirmacion','Tu recuerdo llego al controlador');
/*         echo"<p>";
            echo $req->path();
            echo "<br>";
            echo $req->method();
            echo "<br>";
            echo $req->ip();
            echo "<br>";
            echo $req->url();
        echo"</p>"; */
    }
}
