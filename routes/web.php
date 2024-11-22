<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\ProductoController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\SessionsController;
use App\Http\Controllers\CategoriaController;
use App\Http\Controllers\PuntoDeVentaController;



Route::get('/', [HomeController::class, 'index']);

Route::get('/perfil', function () {
    return view('paginas/perfil');
});

Route::get('/seguidos', function () {
    return view('paginas/seguidos');
});


Route::get('/informacion', function () {
    return view('paginas/informacion');
});

Route::get('/PoliticasPrivacidad', function () {
    return view('paginas/PoliticasPrivacidad');
});


Route::get('/TerminosyCondiciones', function () {
    return view('paginas/TerminosyCondiciones');
});

Route::get('/offline', function () {
    return view('vendor.laravelpwa.offline');
});

Route::get('/eliminar-facebook-datos', function () {
    return view('paginas.eliminar-facebook-datos');
});

Route::get('/venta', function () {
    return view('paginas.venta');
});

// Vistas Admin


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
Route::get('/venta', [AdminController::class, 'indexvendedor'])->middleware('auth.admin')->name('admin.indexvendedor');
Route::get('/admin', [AdminController::class, 'indexadmin'])->middleware('auth.admin')->name('admin.indexadmin');

// Categoria CRUD:
Route::resource('categorias', CategoriaController::class);

// Punto de venta CRUD
Route::post('/guardar-ubicacion', [PuntoDeVentaController::class, 'guardarUbicacion'])->name('guardar.ubicacion');
Route::get('/puntosdeventa', [PuntoDeVentaController::class, 'index'])->name('puntosdeventa.index');
Route::get('/puntosdeventa/create', [PuntoDeVentaController::class, 'create'])->name('puntosdeventa.create');
Route::get('/puntosdeventa/{puntodeventa}', [PuntoDeVentaController::class, 'show'])->name('puntosdeventa.show');
Route::post('/puntosdeventa', [PuntoDeVentaController::class, 'store'])->name('puntosdeventa.store');
Route::get('/puntosdeventa/{puntodeventa}/edit', [PuntoDeVentaController::class, 'edit'])->name('puntosdeventa.edit');
Route::put('/puntosdeventa/{puntodeventa}', [PuntoDeVentaController::class, 'update'])->name('puntosdeventa.update');
Route::delete('/puntosdeventa/{puntodeventa}', [PuntoDeVentaController::class, 'destroy'])->name('puntosdeventa.destroy');
/* Route::get('/puntosdeventa', [PuntoDeVentaController::class, 'tienda'])->name('puntosdeventa.tienda');
 */
// Producto CRUD
Route::get('/puntosdeventa/{puntodeventa}/productos', [ProductoController::class, 'index'])->name('productos.index');
Route::get('/puntosdeventa/{puntodeventa}/productos/create', [ProductoController::class, 'create'])->name('productos.create');
Route::post('/puntosdeventa/{puntodeventa}/productos', [ProductoController::class, 'store'])->name('productos.store');
Route::get('/puntosdeventa/{puntodeventa}/productos/{producto}/edit', [ProductoController::class, 'edit'])->name('productos.edit');
Route::put('/puntosdeventa/{puntodeventa}/productos/{producto}', [ProductoController::class, 'update'])->name('productos.update');
Route::delete('/puntosdeventa/{puntodeventa}/productos/{producto}', [ProductoController::class, 'destroy'])->name('productos.destroy');