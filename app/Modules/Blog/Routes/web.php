<?php

use Illuminate\Support\Facades\Route;
use App\Modules\Blog\Controllers\BlogController;

Route::prefix('blog')->group(function () {
    Route::get('/', [BlogController::class, 'index'])->name('blog.index');
    Route::get('/post/{id}', [BlogController::class, 'post'])->name('blog.post');
});
