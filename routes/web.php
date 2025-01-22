<?php

use Illuminate\Support\Facades\Route;

Route::inertia('/home', 'Home');

Route::get('/', function () {
    return view('welcome');
});
