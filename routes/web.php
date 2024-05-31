<?php

use Illuminate\Support\Facades\Route;


$servicios=[
    ['titulo'=>'Servicio 1'],
    ['titulo'=>'Servicio 2'],
    ['titulo'=>'Servicio 3'],
    ['titulo'=>'Servicio 4'],
    ['titulo'=>'Servicio 5'],
];


Route::view('/','home')->name('home');
Route::view('nosotros','nosotros')->name('nosotros');
// controlador 1
// Route::get('servicios','App\Http\Controllers\ServiciosController@servicios' )->name('servicios');

// controlador 2
// Route::get('servicios','App\Http\Controllers\Servicios2Controller@index' )->name('servicios');


Route::view('contacto','contacto')->name('contacto');


// route::resource('servicios','App\Http\Controllers\Servicios2Controller')->only('index','show');





Route::view('servicios','servicios', compact('servicios'))->name('servicios');




// Route::get('servicios/{opcional?}', function ($opcional = null) {
//     return view('servicios', ['opcional' => $opcional]);
// })->where('opcional', '[A-Za-z]+');

// Route::get('proyectos/{opcional?}', function ($opcional = null) {
//     return view('proyectos', ['opcional' => $opcional]);
// })->where('opcional', '[A-Za-z]+');

// Route::get('clientes/{opcional?}', function ($opcional = null) {
//     return view('clientes', ['opcional' => $opcional]);
// })->where('opcional', '[A-Za-z]+');

// Route::get('blog/{opcional?}', function ($opcional = null) {
//     return view('blog', ['opcional' => $opcional]);
// })->where('opcional', '[0-9]+');

// Route::get('contacto', function () {
//     return view('contacto');
// });
