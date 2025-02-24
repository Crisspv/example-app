<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/home', function () {
    return view('home');
});

Route::get('/contact', function () {
    return view('contact');
});
                                        // Request  //nombre de la variable (libre)
Route::post('/crear-contacto', function (Request $request) {
    dd($request->all(), $request->mail);

    // Validar formulario

    //Guardar a DB

    // Redirigir

});