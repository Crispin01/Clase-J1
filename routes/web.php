<?php

use App\Http\Controllers\CiudadesController;
use App\Http\Controllers\PaisController;
use App\Http\Controllers\DistritosController;
use App\Http\Controllers\ClienteController;
use App\Http\Controllers\ProfileController;
use App\Models\Pais;
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

Route::resource('clientes',[ClienteController::class]);
// Route::get('/clientes', [ClienteController::class, 'index'])->name('clientes');

Route::get('/ciudades', [CiudadesController::class, 'index'])->name('ciudades');

Route::get('/distritos', [DistritosController::class, 'index'])->name('distritos');

Route::get('/paises', [PaisController::class, 'index'])->name('paises');


require __DIR__.'/auth.php';
