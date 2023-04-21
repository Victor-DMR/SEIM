<?php

use Illuminate\Support\Facades\Route;

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

/* Route::get('/', function () {
    return view('home');
}); 

Route::get('/login', function () {
    return view('login');
});

Route::get('/registro', function () {
    return view('registro');
});

Route::get('/tiporegistro', function () {
    return view('tiporegistro');
}); */

/* rutas principales */
Route::get('/', [\App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/login', [\App\Http\Controllers\HomeController::class, 'login'])->name('login');
Route::get('/tiporegistro', [\App\Http\Controllers\HomeController::class, 'tiporegistro'])->name('tiporegistro');
Route::get('/registro-vendedor', [\App\Http\Controllers\HomeController::class, 'registrovendedor'])->name('registrovendedor');

/* rutas de vendedor */
Route::get('vendedor', [\App\Http\Controllers\VendedorController::class, 'index'])->name('vendedor');
Route::get('perfin-vendedor', [\App\Http\Controllers\VendedorController::class, 'perfil'])->name('vendedor-perfil');

