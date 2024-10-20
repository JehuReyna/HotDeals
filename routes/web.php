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

