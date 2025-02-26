<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MensajeController extends Controller
{
    public function create() {
        return view('contact');
    }

    public function store(Request $request) {
        dd($request->all(), $request->mail);
    
        // Validar formulario
    
        //Guardar a DB
    
        // Redirigir
    
    }
}
