<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\categorias;
use App\Http\Controllers\clientes;
use App\Http\Controllers\detalleingresos;
use App\Http\Controllers\detalleventas;
use App\Http\Controllers\productos;
use App\Http\Controllers\proveedores;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');

    Route::resource('categorias', categorias::class)->names('categorias');

    Route::resource('clientes', clientes::class)->names('clientes');

    Route::resource('productos', productos::class)->names('productos');

    Route::resource('proveedores', proveedores::class)->names('proveedores');

    Route::resource('detalleingresos', detalleingresos::class)->names('detalleingresos');

    Route::resource('detalleventas', detalleventas::class)->names('detalleventas');

});



