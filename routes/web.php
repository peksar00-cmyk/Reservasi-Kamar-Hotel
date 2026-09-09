<?php
use App\Models\Room;
use Carbon\Carbon;
use Illuminate\Http\Request;


function hitungMalam() {
    $checkInDate = session('check_in', date('Y-m-d'));
    $checkOutDate = session('check_out', date('Y-m-d', strtotime('+1 day')));

    $checkIn = Carbon::parse($checkInDate);
    $checkOut = Carbon::parse($checkOutDate);
    $nights = $checkIn->diffInDays($checkOut);

    return [
        'checkIn' => $checkIn->format('d M Y'),
        'checkOut' => $checkOut->format('d M Y'),
        'nights' => ($nights == 0) ? 1 : $nights
    ];
}

Route::get('/checkout/standard', function () {
    $date = hitungMalam();
    $roomPrice = 950000; // Harga khusus Standard

    $subtotal = $roomPrice * $date['nights'];
    $tax = $subtotal * 0.10;

    return view('bookstandard', [
        'checkIn' => $date['checkIn'],
        'checkOut' => $date['checkOut'],
        'nights' => $date['nights'],
        'roomPrice' => $roomPrice,
        'subtotal' => $subtotal,
        'tax' => $tax,
        'grandTotal' => $subtotal + $tax
    ]);
});

Route::get('/checkout/deluxe', function () {
    $date = hitungMalam();
    $roomPrice = 1250000; // Harga khusus Deluxe

    $subtotal = $roomPrice * $date['nights'];
    $tax = $subtotal * 0.10;

    return view('bookdeluxe', [
        'checkIn' => $date['checkIn'],
        'checkOut' => $date['checkOut'],
        'nights' => $date['nights'],
        'roomPrice' => $roomPrice,
        'subtotal' => $subtotal,
        'tax' => $tax,
        'grandTotal' => $subtotal + $tax
    ]);
});

Route::get('/checkout/suite', function () {
    $date = hitungMalam();
    $roomPrice = 1850000; // Harga khusus Suite

    $subtotal = $roomPrice * $date['nights'];
    $tax = $subtotal * 0.10;

    return view('booksuite', [
        'checkIn' => $date['checkIn'],
        'checkOut' => $date['checkOut'],
        'nights' => $date['nights'],
        'roomPrice' => $roomPrice,
        'subtotal' => $subtotal,
        'tax' => $tax,
        'grandTotal' => $subtotal + $tax
    ]);
});

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Usercontroller;
use App\Http\Controllers\BookingController;

Route::get('/', function () {
    $rooms = Room::all();
    return view('index', ['rooms' => $rooms]);
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

Route::get('/room/1', function () {
    return view('standard-room');
});
Route::get('/room/2', function () {
    return view('deluxe-king-room');
});
Route::get('/room/3', function () {
    return view('suite-room');
});
Route::get('/guests', function () {
    return view('moreperson');
});

Route::post('/search-action', [BookingController::class, 'store'])->name('booking.store');


Route::get('/search-action', function (Illuminate\Http\Request $request) {
    // 1. Tangkap angka yang dipilih dari <select name="guests">
   session([
        'check_in' => $request->check_in,
        'check_out' => $request->check_out,
        'guests' => $request->guests
    ]);

    $jumlahTamu = $request->guests;
    // 2. Buat logika pengarahannya (Redirect)
    if ($jumlahTamu == '1') {
        // Jika pilih 1 Guest, lempar ke halaman Standard Room
        return redirect('/room/1');

    } elseif ($jumlahTamu == '2') {
        // Jika pilih 2 Guests, lempar ke halaman Standard Room juga (karena muat 2 orang)
        return redirect('/guests');

    } elseif ($jumlahTamu == '3') {
        // Jika pilih 3 Guests, (nanti) lempar ke halaman Deluxe
        // Sementara kita lempar ke home dulu karena halamannya belum kamu buat
        return redirect('/room/3');

    } else {
        // Jika pilih 4 Guests, (nanti) lempar ke halaman Suite
        return redirect('/room/3');
    }
});
Route::get('/end', function () {
    return view('terimakasih');
});
