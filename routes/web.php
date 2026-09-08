<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Usercontroller;

//Route::get('/index', function () {
    //return view('index');
//});

Route::get('/', function () {
    return view('index');
})->name('index');

Route::get('/login', function () {
    return view('login');
});

// Route untuk register
Route::get('/register', [Usercontroller::class, 'showRegister'])->name('register');

Route::post('/register', [Usercontroller::class, 'register']);

// Route untuk login
Route::get('/login', [Usercontroller::class, 'showLogin'])->name('login');

Route::post('/login', [Usercontroller::class, 'login']);

Route::get('/standard-room', function () {
    return view('standard-room');
});
Route::get('/deluxe-king-room', function () {
    return view('deluxe-king-room');
});
Route::get('/suite-room', function () {
    return view('suite-room');
});
