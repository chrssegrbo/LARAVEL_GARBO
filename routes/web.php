<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('HomePage');
});

Route::get('/about', function () {
    return view('AboutPage');
});

Route::get('/contact', function () {
    return view('ContactPage');
});

Route::get('/login', function () {
    return view('LoginPage');
});

Route::get('/register', function () {
    return view('RegisterPage');
});
