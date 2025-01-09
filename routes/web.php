<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('auth.sign-in');
});

Route::get('/dashboard', function () {
    return view('pages.dashboard');
});

Route::get('/add-location', function () {
    return view('pages.add-location');
});

Route::get('/add-camera', function () {
    return view('pages.add-camera');
});

Route::get('/cameras', function () {
    return view('pages.cameras');
});
