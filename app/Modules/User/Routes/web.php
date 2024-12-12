<?php

use App\Modules\User\Controllers\UserController;
use Illuminate\Support\Facades\Route;

    Route::prefix('user')->group(function () {
        Route::get('/', [UserController::class, 'index'])->name('user.index');
    });

?>