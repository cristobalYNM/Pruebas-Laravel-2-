<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductosController;

Route::get('/', function () {
    return view('welcome');
});

//Route::get('/Productos', [ProductosController::class,'index'])
//->name('productos.index');

//Route::get('/Productos/create', [ProductosController::class,'create'])
//>name('productos.create');


//Route::post('/Productos/create', [ProductosController::class,'store'])
//>name('productos.store');

Route::resource('Productos',ProductosController::class);