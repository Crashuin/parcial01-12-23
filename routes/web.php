<?php

use App\Http\Controllers\ArticuloController;
use App\Http\Controllers\MarcaController;
use App\Http\Controllers\TiendaController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;

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
    return redirect()->route('dashboard');
});


Route::get('/perez/presentacion', [TiendaController::class, 'index'])->name('dashboard');

Route::get('/perez/articulos', [ArticuloController::class, 'index'])->name('articulolista');

Route::get('/perez/marcas', [MarcaController::class, 'index'])->name('marcalista');

