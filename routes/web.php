<?php

// DECLARACIONES 'use' NECESARIAS
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\DispositivoController;
use App\Http\Controllers\EmpleadoController;
use App\Http\Controllers\CargoController;
use App\Http\Controllers\DepartamentoController;
use App\Http\Controllers\UbicacionController;
use App\Http\Controllers\ModeloController;
use App\Http\Controllers\ReporteController;
use App\Http\Controllers\AccionController;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
*/

// Ruta de bienvenida pública
Route::get('/', function () {
    return view('welcome');
});

// Ruta del Dashboard principal (requiere login)
Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');


// --- GRUPO DE RUTAS PROTEGIDAS (REQUIEREN LOGIN) ---
Route::middleware('auth')->group(function () {
    
    // Rutas del perfil de usuario
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    // --- RUTAS DEL SISTEMA DE INVENTARIO ---
    // El método Route::resource crea automáticamente todas las rutas para un CRUD.
    Route::resource('dispositivos', DispositivoController::class);
    Route::resource('empleados', EmpleadoController::class);
    Route::resource('cargos', CargoController::class);
    Route::resource('departamentos', DepartamentoController::class);
    Route::resource('ubicaciones', UbicacionController::class);
    Route::resource('modelos', ModeloController::class);
    Route::resource('reportes', ReporteController::class);
    Route::resource('acciones', AccionController::class);
});


// Rutas de autenticación (login, registro, etc.)
require __DIR__.'/auth.php';