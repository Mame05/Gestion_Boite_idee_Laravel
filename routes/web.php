<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\IdeeController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\LogoutController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\CategorieController;

Route::get('/', function () {
    return view('welcome');
});
// CRUD CATÉGORIE
Route::get('/categories', [CategorieController::class, 'index'])->name('categories.index');
Route::get('/categories/create', [CategorieController::class, 'create'])->name('categories.create');
Route::post('/categories', [CategorieController::class, 'store'])->name('categories.store');
Route::get('/categories/{categorie}/edit', [CategorieController::class, 'edit'])->name('categories.edit');
Route::put('/categories/{categorie}', [CategorieController::class, 'update'])->name('categories.update');
Route::delete('/categories/{categorie}', [CategorieController::class, 'destroy'])->name('categories.destroy');

// CRUD IDÉE
Route::get('/idees/create', [IdeeController::class, 'create'])->name('idees.create');
Route::post('/idees', [IdeeController::class, 'store'])->name('idees.store');
Route::get('/idees', [IdeeController::class, 'index'])->name('idees.index');
Route::get('/idees/{idee}/edit', [IdeeController::class, 'edit'])->name('idees.edit');
Route::put('/idees/{idee}', [IdeeController::class, 'update'])->name('idees.update');
Route::delete('/idees/{idee}', [IdeeController::class, 'destroy'])->name('idees.destroy');

//Autentification
Route::get('login', [LoginController::class, 'showLoginForm'])->name('login');
Route::post('login', [LoginController::class, 'login']);
Route::post('logout', [LogoutController::class, 'logout'])->name('logout');

Route::get('register', [RegisterController::class, 'showRegistrationForm'])->name('register');
Route::post('register', [RegisterController::class, 'register']);