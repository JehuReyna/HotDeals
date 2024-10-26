<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\SessionsController;
use App\Http\Controllers\AdminController;




Route::get('/', function () {
    return view('paginas/index');
});

Route::get('/perfil', function () {
    return view('paginas/perfil');
});

Route::get('/seguidos', function () {
    return view('paginas/seguidos');
});


Route::get('/informacion', function () {
    return view('paginas/informacion');
});

/* Route::get('/venta', function () {
    return view('paginas/venta');
}); */


/* Route::get('/cuenta', function () {
    return view('components/cuenta');
}); */

// Ruta para la página de selección de roles vendedor o cliente
Route::get('/cuenta', [RegisterController::class, 'index'])->name('roles.index');

// Ruta para la página de registro
Route::get('/register', [RegisterController::class, 'create'])->name('register.index');
Route::post('/register', [RegisterController::class, 'store'])->name('register.store');

// Rutas de login y logout
Route::get('/login', [SessionsController::class, 'create'])->name('login.index');
Route::post('/login', [SessionsController::class, 'store'])->name('login.store');
Route::get('/logout', [SessionsController::class, 'destroy'])->name('login.destroy');

// Ruta protegida para admin
Route::get('/venta', [AdminController::class, 'index'])->middleware('auth.admin')->name('admin.index');