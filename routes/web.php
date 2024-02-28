<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductoController;
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

Route::get('/', [ProductoController::class, 'index'])->name('productos.index');

Route::get('/create', [ProductoController::class, 'create'])->name('productos.create');

Route::post('/store', [ProductoController::class, 'store'])->name('productos.store');

Route::get('/{producto}/edit', [ProductoController::class, 'edit'])->name('productos.edit');

Route::put('/{producto}', [ProductoController::class, 'update'])->name('productos.update');

Route::delete('/{producto}', [ProductoController::class, 'destroy'])->name('productos.destroy');