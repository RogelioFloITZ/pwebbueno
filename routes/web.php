<?php

use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Route;

// Route::get('/', function() {
//     return view('articulo.index');
// });

Route::resource('articulos', 'App\Http\Controllers\ArticuloController'); //funcionando en http://127.0.0.1:8000/articulos recuerdalo xD