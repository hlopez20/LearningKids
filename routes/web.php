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

Route::get('pantallaPrincipal', function () {
    return view('pantallaPrincipal');
});
Route::get('pantallaEspañol', function () {
    return view('Español/pantallaPrincipalDeLaClaseDeEspañol');
});

Route::get('pantallaCuentos', function () {
    return view('Español/Cuentos');
});


Route::get('pantallaTipos', function () {
    return view('Español/pantallaCuentos');
});

Route::get('trabalenguas', function () {
    return view('Español/pantallaTrabalenguas');
});


Route::get('refranes', function () {
    return view('Español/pantallaRefranes');
});

