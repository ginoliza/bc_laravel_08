<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/saludo/{name}', function ($name) {
    return view('greeting', ['name' => $name]);
});

Route::get('/home', function () {
    return view('home');
});