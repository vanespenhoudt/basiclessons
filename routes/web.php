<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
});

Route::get('/apropos', function () {
    return view('apropos');
});

Route::get('/services', function () {
    return view('services');
});
