<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\diario_controller;

//Rutas individuales tipo controlador 
Route::get('/',[diario_controller::class,'metodo_inicio'] )->name('apodoInicio');
Route::get('/formulario',[diario_controller::class,'metodo_formulario'] )->name('apodoFormulario');
Route::get('/recuerdos',[diario_controller::class,'metodo_recuerdos'] )->name('apodoRecuerdos');

Route::POST('/guardar_recuerdo',[diario_controller::class,'metodo_guardar'] )->name('memorizar');


// Rutas agrupadas tipo controlador
/* Route::controller( diario_controller::class )->group(function(){
    Route::get('/','metodo_inicio' )->name('apodoInicio');
    Route::get('/formulario','metodo_formulario' )->name('apodoFormulario');
    Route::get('/recuerdos','metodo_recuerdos' )->name('apodoRecuerdos');
}); */

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
Route::get('/', function () {
    return view('welcome');
});

Route::view('/', 'welcome')->name('apodoInicio');
Route::view('/formulario', 'formulario')->name('apodoFormulario');
Route::view('/recuerdos', 'recuerdos')->name('apodoRecuerdos');
*/
