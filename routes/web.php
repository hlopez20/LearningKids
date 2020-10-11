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



/*  rutas de la clase de español*/
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

Route::get('adivinanzas', function () {
    return view('Español/adivinanzas');
});


Route::get('tiposAdivinanzas', function () {
    return view('Español/adivinanzasDeAnimales');
});


Route::get('adivinanzaCorta', function () {
    return view('Español/adivinanzaCorta');
});


Route::get('adivinanzaFruta', function () {
    return view('Español/adivinanzasDeFrutas');
});

Route::get('adivinanzaNumeros', function () {
    return view('Español/adivinanzasNumeros');
});


Route::get('adivinanzaTransporte', function () {
    return view('Español/adivinanzaTransporte');
});


Route::get('chistes', function () {
    return view('Español/pantallaChistes');
});

/*pantalla de la clase de ciencias sociales*/

Route::get('cienciasSociales', function () {
    return view('Ciencias Sociales/pantallaPrincipalDeCienciasSociales');
});


/* rutas de ciencias naturales*/

Route::get('cienciasNaturales', function () {
    return view('Ciencias Naturales/pantallaPrincipalDeCienciasNaturales');
});



