<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BookController;

Route::get('/books', [BookController::class, 'index'])->name('Books.index');
Route::get('/books/create', [BookController::class, 'create'])->name('Books.create');
Route::post('/books', [BookController::class, 'store'])->name('Books.store');
Route::get('/books/{book}', [BookController::class, 'show'])->name('Books.show');
Route::get('/books/{book}/edit', [BookController::class, 'edit'])->name('Books.edit');
Route::put('/books/{book}', [BookController::class, 'update'])->name('Books.update');
Route::delete('/books/{book}', [BookController::class, 'destroy'])->name('Books.destroy');

