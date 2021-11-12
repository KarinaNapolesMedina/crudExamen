<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ListaPersonasController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});
/*
Route::get('/lista_personas', function () {
    return view('lista_personas.index');
});

Route::get('lista_personas/create', [ListaPersonasController::class,'create']); 
*/
Route::resource('lista_personas', ListaPersonasController::class);