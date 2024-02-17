<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TiendaController;


Route::get('/', function () {
    return view('welcome');
});

Route::resource('tienda', TiendaController::class);

Auth::routes();

Route::get('/home', [App\Http\Controllers\TiendaController::class, 'index'])->name('home');

Auth::routes();

Route::get('/home', [App\Http\Controllers\TiendaController::class, 'index'])->name('home');
