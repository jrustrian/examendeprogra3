<?php

use Illuminate\Support\Facades\Route;

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
    return view('layouts.planilla');
});

Route::get('/formulario', [\App\Http\Controllers\EstudianteController::class, 'registrar'])->name('registrar');
Route::post('/guardar', [\App\Http\Controllers\EstudianteController::class, 'guardar'])->name('guardar');
Route::get('/mostrar',[\App\Http\Controllers\EstudianteController::class, 'mostrar'])->name('mostrar');

Route::get('/formulariogenero', [\App\Http\Controllers\GeneroController::class, 'form'])->name('registrarge');
Route::post('/guardargenero', [\App\Http\Controllers\GeneroController::class, 'save'])->name('guardargene');
Route::get('/mostrargenero',[\App\Http\Controllers\GeneroController::class, 'mostrarge'])->name('mostrarge');
