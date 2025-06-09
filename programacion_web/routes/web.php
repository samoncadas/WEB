<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\BookController;
use App\Http\Controllers\CategoryController;

Route::middleware(['auth', 'role:admin'])->group(function () {
    Route::get('/', [BookController::class, 'index'])->name('books.index');
    Route::post('/books', [BookController::class, 'store'])->name('books.store');#guardar
    Route::get('/books/{id}', [BookController::class, 'edit'])->name('books.edit');#editar
    Route::put('/books/{id}', [BookController::class, 'update'])->name('books.update');#editar
    Route::delete('/books/{id}', [BookController::class, 'destroy'])->name('books.destroy');#eliminar
    
    Route::get('/categories', [CategoryController::class, 'index'])->name('categories.index');
    Route::post('/categories', [CategoryController::class, 'store'])->name('categories.store');#guardar
    Route::get('/categories/{id}', [CategoryController::class, 'edit'])->name('categories.edit');#editar
    Route::put('/categories/{id}', [CategoryController::class, 'update'])->name('categories.update');#editar
    Route::delete('/categories/{id}', [CategoryController::class, 'destroy'])->name('categories.destroy');#eliminar
});




Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
