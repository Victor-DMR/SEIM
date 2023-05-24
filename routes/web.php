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

/* rutas de vendedor */
Route::get('/busqueda', [\App\Http\Controllers\VendedorController::class, 'busqueda'])->name('busqueda');
Route::get('/registro-vendedor', [\App\Http\Controllers\VendedorController::class, 'registrovendedor'])->name('registrovendedor');
Route::post('/guardar', [\App\Http\Controllers\VendedorController::class, 'guardarvendedor'])->name('guardar');
Route::post('validarlogin', [\App\Http\Controllers\VendedorController::class, 'validarlogin'])->name('validarlogin');
Route::get('/perfil-vendedor', [\App\Http\Controllers\VendedorController::class, 'perfil'])->name('perfil-vendedor');
Route::get('/editar-perfil', [\App\Http\Controllers\VendedorController::class, 'editarPerfil'])->name('editarperfil');
Route::get('/informacion', [\App\http\controllers\VendedorController::class, 'informacion'])->name('informacion');


