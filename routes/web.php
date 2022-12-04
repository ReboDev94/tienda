<?php

use App\Http\Controllers\PagosController;
use App\Http\Controllers\PrincipalController;
use App\Http\Controllers\ProductoController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\VentasController;
use Illuminate\Foundation\Application;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

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


Route::get('/', [PrincipalController::class, 'index'])->name('inicio');

Route::prefix('productos')->group(function () {
    Route::get('/', [ProductoController::class, 'index'])->name('productos');
    Route::get('/nuevo', [ProductoController::class, 'create'])->name('newProduct');
    Route::post('/save', [ProductoController::class, 'save'])->name('saveProduct');
    Route::delete('/eliminar/{producto}', [ProductoController::class, 'delete'])->name('deleteProduct');

    Route::get('/editar/{producto}', [ProductoController::class, 'edit'])->name('editProduct');
    Route::patch('/editar/{producto}', [ProductoController::class, 'update'])->name('updateProduct');
    Route::get('/carrito', [ProductoController::class, 'carrito'])->name('car-shopping');
});

Route::prefix('ventas')->group(function () {
    Route::get('/', [VentasController::class, 'index'])->name('ventas');
});

Route::post('/pagar', [PagosController::class, 'pagar'])->name('pagar');


require __DIR__ . '/auth.php';
