<?php

use App\Modules\Products\Controllers\ProductsController;
use Illuminate\Support\Facades\Route;



Route::resource('products', ProductsController::class);


?>