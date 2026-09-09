<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Usercontroller;
use App\Http\Controllers\BookingController;

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
Route::get('/checkout', function () {
    return view('bookstandard');
});
Route::get('/checkout-deluxe', function () {
    return view('bookdeluxe');
});
Route::get('/checkout-suite', function () {
    return view('booksuite');
});
Route::get('/guests', function () {
    return view('moreperson');
});

Route::post('/search-action', [BookingController::class, 'store'])->name('booking.store');

use Illuminate\Http\Request;

Route::get('/search-action', function (Request $request) {
    // 1. Tangkap angka yang dipilih dari <select name="guests">
    $jumlahTamu = $request->guests;

    // 2. Buat logika pengarahannya (Redirect)
    if ($jumlahTamu == '1') {
        // Jika pilih 1 Guest, lempar ke halaman Standard Room
        return redirect('/standard-room');

    } elseif ($jumlahTamu == '2') {
        // Jika pilih 2 Guests, lempar ke halaman Standard Room juga (karena muat 2 orang)
        return redirect('/guests');

    } elseif ($jumlahTamu == '3') {
        // Jika pilih 3 Guests, (nanti) lempar ke halaman Deluxe
        // Sementara kita lempar ke home dulu karena halamannya belum kamu buat
        return redirect('/suite-room');

    } else {
        // Jika pilih 4 Guests, (nanti) lempar ke halaman Suite
        return redirect('/suite-room');
    }
});
