<?php

use Illuminate\Support\Facades\Route;

use Helloworld\Hello;

Route::get('/', function () {
   $test = new Hello();
   return $test->sayHello();

});


// require base_path('App/Modules/Products/Routes/web.php');
