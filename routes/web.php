<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    $aa = 2;
    var_dump($aa);
    return view('welcome');
});
