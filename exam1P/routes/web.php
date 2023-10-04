<?php

use Illuminate\Support\Facades\Route;

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
    return view('pantalla');
});


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
*/
Route::view('/', 'welcome')->name('apodoInicio');
Route::view('/pagina1', 'pagina1')->name('apodopagina1');
Route::view('/pagina2', 'pagina2')->name('apodopagina2');
Route::view('/pagina3', 'pagina3')->name('apodopagina3');
/*
Route::get('/', function () {
    return view('home');
});
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/pagina2', [Resources\views\pagina2])->name('apodopagina3'); 
*/