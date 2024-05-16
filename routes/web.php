<?php

use App\Http\Controllers\PersonasController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\Auth\LoginController;


Route::get('/inicio', [PersonasController::class, 'inicio'])->name('personas.inicio');


Route::get('/', [PersonasController::class, 'index'])->name('personas.index');

Route::get('/create', [PersonasController::class, 'create'])->name('personas.create');

Route::post('/store', [PersonasController::class, 'store'])->name('personas.store');

Route::get('/show/{id}', [PersonasController::class, 'show'])->name('personas.show');

Route::get('/edit/{id}', [PersonasController::class, 'edit'])->name('personas.edit');

Route::put('/update/{id}', [PersonasController::class, 'update'])->name('personas.update');

Route::delete('/destroy/{id}', [PersonasController::class, 'destroy'])->name('personas.destroy');







Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('register', [RegisterController::class, 'showRegistrationForm'])->name('register');
Route::post('register', [RegisterController::class, 'register']);

Route::get('login', [LoginController::class, 'showLoginForm'])->name('login');
Route::post('login', [LoginController::class, 'login']);
Route::post('logout', [LoginController::class, 'logout'])->name('logout');
