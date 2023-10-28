<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\libros_controller;


Route::get('/',[libros_controller::class,'metodo_principal'] )->name('apodoPrincipal');

Route::get('/registrar_libro',[libros_controller::class,'metodo_registro'] )->name('apodoRegistro');

Route::POST('/guardar_libro',[libros_controller::class,'metodo_guardar'] )->name('memorizar');



/* Auth::routes(); */

/* Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
 */