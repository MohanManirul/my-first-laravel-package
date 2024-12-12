<?php

use Illuminate\Support\Facades\Route;

use Helloworld\Hello;

Route::get('/', function () {
   $test = new Hello();
   return $test->sayHello();

});
