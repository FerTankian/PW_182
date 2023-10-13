<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\diario_controller;


Route::get('/',[diario_controller::class,'metodo_inicio'] )->name('apodoInicio');
Route::get('/formulario',[diario_controller::class,'metodo_inicio'] )->name('apodoFormulario');
Route::get('/recuerdos',[diario_controller::class,'metodo_inicio'] )->name('apodoRecuerdos');

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
