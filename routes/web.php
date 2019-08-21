<?php

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

Route::get('/usuario/{id}', function( $id ) {
    $nombre = "pepe";
    return "nombre {$nombre} datos del usuario {$id}";
} );

// Route::get('/nacimiento/{anyo}/{mes}', function($anyo, $mes){
// $year=2019;
// return $year-$anyo;

// });

Route::get('/nacimiento/{anyo}/{mes}', function($anyo, $mes){
    
    $fecha = getdate() ;
    $anyoActual = $fecha{"year"} ;
    return response()->json( ["year" => $anyoActual] );
    
    });