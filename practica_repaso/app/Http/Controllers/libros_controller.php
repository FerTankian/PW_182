<?php

namespace App\Http\Controllers;
use RealRashid\SweetAlert\Facades\Alert;

use App\Http\Requests\validadorFormularioLibro;
use Illuminate\Foundation\Validation\ValidatesRequests;
 use Illuminate\Routing\Controller as BaseController; 

class libros_controller extends Controller
{
    public function metodo_principal(){
        return view('principal');

    }
    public function metodo_registro(){
        return view('formulario_libro');
        
    }
    public function metodo_guardar( validadorFormularioLibro  $req){

           /* $validated = $req->validate([
              'txtTitulo' => 'required|max:25',
              'txtRecuerdo' => 'required|min:5', 
          ]);  */
        return redirect('/registro')->with('confirmacion', 'Tu Registro se guardó correctamente!');
       /* Alert::success('¡Éxito!', 'Tu libro se ha registrado correctamente');
         return redirect('/formulario_libro'); */

         /* return Alert::success('¡Éxito!', 'Tu libro se ha registrado correctamente');
           return redirect('/')->with ('confirmacion','Tu libro se a registrado'); */

        } 
  
}
