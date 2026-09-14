<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Kreait\Firebase\Factory;

class BookingController extends Controller
{
    public function store(Request $request)
    {
        // 1. Sambungkan ke Firebase menggunakan file JSON rahasia
        // PENTING: Ganti tulisan URL di bawah dengan URL Realtime Database milikmu!
        $firebase = (new Factory)
            ->withServiceAccount(base_path('firebase-auth.json'))
            ->withDatabaseUri('https://stayease-hotel-25a7d-default-rtdb.firebaseio.com');

        $database = $firebase->createDatabase();

// 2. Tangkap data dari form
            $bookingData = [
                'name' => $request->name ?? 'Tanpa Nama',
                'email' => $request->email ?? 'Tanpa Email',
                'phone' => $request->phone ?? 'Tanpa Telepon',
                'room' => $request->room ?? 'Kamar Tidak Diketahui',
                'check_in' => $request->check_in ?? 'Tanggal Check-in Tidak Diketahui',
                'check_out' => $request->check_out ?? 'Tanggal Check-out Tidak Diketahui',

                // INI BARIS BARU UNTUK MENANGKAP SPECIAL REQUESTS
                'special_requests' => $request->special_requests ?? 'Tidak ada catatan khusus',

                'booking_date' => date('Y-m-d H:i:s')
            ];

        // 3. Lempar datanya ke Firebase ke dalam tabel/kategori bernama 'bookings'
        $database->getReference('bookings')->push($bookingData);

        // 4. Setelah berhasil menyimpan ke database admin, pindah ke halaman Terima Kasih
        return redirect('/terimakasih')->with('success', 'Booking berhasil! Terima kasih telah memesan kamar di hotel kami.');
    }
}
