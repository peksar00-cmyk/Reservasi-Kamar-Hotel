<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Kreait\Firebase\Factory;

class AdminAuthController extends Controller
{
    // 1. Menampilkan halaman form login admin
    public function showLoginForm()
    {
        return view('login-admin');
    }

    // 2. Memproses data saat tombol ditekan
    public function login(Request $request)
    {
        $email = $request->email;
        $password = $request->password;

        try {
            // Sambungkan ke Firebase
            $firebase = (new Factory)
                ->withServiceAccount(base_path('firebase-auth.json')); 
                
            // PENTING: Gunakan fitur Auth, bukan Database
            $auth = $firebase->createAuth();

            // Firebase akan mengecek apakah email dan password cocok
            $signInResult = $auth->signInWithEmailAndPassword($email, $password);

            // JIKA BERHASIL (Kunci Cocok):
            // Kita simpan sesi (session) agar sistem ingat bahwa admin sudah login
            session(['is_admin' => true, 'admin_email' => $email]);

            // Arahkan ke halaman dasbor admin (nanti kita buat rutenya)
            return redirect('/dashboard-admin');

        } catch (\Exception $e) {
            // JIKA GAGAL (Password Salah / Email Tidak Ada):
            // Kembalikan ke halaman login dan munculkan pesan error
            return redirect('/login-admin')->with('error', 'Login gagal! Email atau password salah.');
        }
    }
    // 3. Menampilkan halaman Dashboard Admin
    public function dashboard()
    {
        // KUNCI PENGAMAN: Cek apakah session is_admin sudah ada
        // Jika belum login, tendang kembali ke halaman login
        if (!session('is_admin')) {
            return redirect('/login-admin')->with('error', 'Akses ditolak! Silakan login terlebih dahulu.');
        }

        // KONEKSI FIREBASE DATABASE (Untuk mengambil data)
        $firebase = (new Factory)
            ->withServiceAccount(base_path('firebase-auth.json'))
            ->withDatabaseUri('https://stayease-hotel-25a7d-default-rtdb.firebaseio.com'); 

        $database = $firebase->createDatabase();

        // Ambil semua data dari folder 'bookings' di Firebase
        $bookings = $database->getReference('bookings')->getValue();

        // Jika datanya kosong (belum ada yang booking), ubah jadi array kosong agar tidak error
        if (!$bookings) {
            $bookings = [];
        }

        // Kirim datanya ke file HTML dashboard-admin
        return view('dashboard-admin', ['bookings' => $bookings]);
    }
}

