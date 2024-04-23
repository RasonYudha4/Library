<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\BooksController;
use App\Http\Controllers\FeedbackController;
use App\Http\Controllers\AdminbookController;
use App\Http\Controllers\AuthorController;
use App\Http\Controllers\TypeController;
use Illuminate\Support\Facades\Route;

Route::get('/', [HomeController::class, 'index']);

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    Route::get('/books', [BooksController::class, 'index'])->name('book');

    Route::get('/feedbacks', [FeedbackController::class, 'index'])->name('feedback');

    Route::resource('/admin/book', AdminbookController::class);

    Route::get('/admin/author', [AuthorController::class, 'index']);
    Route::post('/admin/author', [AuthorController::class, 'store']);

    Route::get('/admin/type', [TypeController::class, 'index']);
    Route::post('/admin/type', [TypeController::class, 'store']);

});

require __DIR__.'/auth.php';
