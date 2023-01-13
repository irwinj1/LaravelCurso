<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EmpleadosController;

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

Route::get('/mensaje',[EmpleadosController::class,'mensaje']);
Route::get('/controlpago',[EmpleadosController::class,'pago']);
Route::get('/nomina/{diast}/{pago}',[EmpleadosController::class,'nomina']);
Route::get('/saludo/{nombre}/{dias}',[EmpleadosController::class,'saludo']);
Route::get('/salir',[EmpleadosController::class,'salir'])->name('salir');

Route::get('/vb',[EmpleadosController::class,'vb'])->name('vb');
Route::get('/vista1',[EmpleadosController::class,'vista1'])->name('vista1');
Route::get('/vista2',[EmpleadosController::class,'vista2'])->name('vista2');

Route::get('/', function () {
    return view('welcome');
});