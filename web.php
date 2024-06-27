<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';

Route::controller(App\Http\Controllers\ConsolaController::class)->group(function () {

    Route::get('/consoleEdit','index');
    Route::get('/consoleList','create');
    Route::post('/consoleList','store');
    Route::get('/editar-consola/{consola_id}','edit');
    Route::put('/actualizar-consola/{consola_id}','update');
    Route::delete('/borrar-consola/{consola_id}','destroy');
});

Route::controller(App\Http\Controllers\TituloController::class)->group(function () {

    Route::get('/titleEdit','index');
    Route::get('/titleList','create');
    Route::post('/titleList','store');
    Route::get('/editar-titulo/{titulo_id}','edit');
    Route::put('/actualizar-titulo/{titulo_id}','update');
    Route::delete('/borrar-titulo/{titulo_id}','destroy');
});
