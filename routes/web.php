<?php

use App\Http\Controllers\PublicController;
use App\Http\Controllers\SupervisorController;
use App\Http\Controllers\UsuarioController;
use Illuminate\Support\Facades\Route;

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

Route::get('/', [PublicController::class, 'index']);

Auth::routes();

Route::middleware(['auth'])->group(function () {
    Route::get('/home', [PublicController::class, 'home'])->name('home');
    Route::get('modulo/supervisor', [SupervisorController::class, 'index'])->name('modulo.supervisor');
    Route::get('modulo/usuario', [UsuarioController::class, 'index'])->name('modulo.usuario');
});

