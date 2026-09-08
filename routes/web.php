<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('index');
});

Route::get('/login', function () {
    return view('login');
});
Route::get('/register', function () {
    return view('register');
});
Route::get('/standard-room', function () {
    return view('standard-room');
});
Route::get('/deluxe-king-room', function () {
    return view('deluxe-king-room');
});
Route::get('/suite-room', function () {
    return view('suite-room');
});
