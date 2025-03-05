<?php

namespace App\Http\Controllers;
//namespace App\Http\Controllers\Mensaje;

use App\Models\Mensaje;
use Illuminate\Http\Request;

class MensajeController extends Controller
{
    public function index() {
        $mensajes = Mensaje::all();
        return view('lista-mensajes', ['mensajes' => $mensajes]);
    }

    public function create() {
        return view('contact');
    }

    public function store(Request $request) {
        //dd($request->all(), $request->mail);
    
        // Validar formulario
    
        //Guardar a DB
    
        $mensaje = new Mensaje();
        $mensaje->nombre = $request->nombre;
        $mensaje->correo = $request->correo;
        $mensaje->mensaje = $request->mensaje;
        $mensaje->ciudad = 'Guadalajara';
        
        $mensaje->save();
    
        // Redirigir
        return redirect('/contact');       
    }
}
