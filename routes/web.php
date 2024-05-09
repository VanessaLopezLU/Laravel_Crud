<?php

use App\Http\Controllers\PersonasController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;




Route::get('/', [PersonasController::class, 'index'])->name('personas.index');

Route::get('/create', [PersonasController::class, 'create'])->name('personas.create');

Route::post('/store', [PersonasController::class, 'store'])->name('personas.store');

Route::get('/show/{id}', [PersonasController::class, 'show'])->name('personas.show');

Route::get('/edit/{id}', [PersonasController::class, 'edit'])->name('personas.edit');

Route::put('/update/{id}', [PersonasController::class, 'update'])->name('personas.update');

Route::delete('/destroy/{id}', [PersonasController::class, 'destroy'])->name('personas.destroy');





Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
