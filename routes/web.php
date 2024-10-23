<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\SessionsController;

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
    return view('welcome');
}); */


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

Route::get('/venta', function () {
    return view('paginas/venta');
});


Route::get('/cuenta', function () {
    return view('components/cuenta');
});



//Login y registro:

Route::get('/login', [SessionsController::class, 'create'])
    ->name('login.index');

Route::post('/login', [SessionsController::class, 'store'])
    ->name('login.store');

Route::get('/logout', [SessionsController::class, 'destroy'])
    ->name('login.destroy');

Route::get('/register', [RegisterController::class, 'create'])
    ->name('register.index');

Route::post('/register', [RegisterController::class, 'store'])
    ->name('register.store');