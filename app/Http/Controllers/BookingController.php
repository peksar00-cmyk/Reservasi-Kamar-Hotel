<?php

namespace App\Http\Controllers;

use App\Models\Booking;
use Illuminate\Http\Request;
use Carbon\Carbon;

class BookingController extends Controller
{
    public function store(Request $request)
    {
        // 1. Validasi Input
        $validated = $request->validate([
            'destination' => 'required|string',
            'check_in'    => 'required|date|after_or_equal:today',
            'check_out'   => 'required|date|after:check_in',
            'guests'      => 'required|integer|min:1',
            'room_type'   => 'nullable|string',
        ]);

        // 2. Hitung Durasi Menginap (Malam)
        $checkIn  = Carbon::parse($validated['check_in']);
        $checkOut = Carbon::parse($validated['check_out']);
        $durasiMalam = $checkIn->diffInDays($checkOut);

        // 3. Ambil Jumlah Tamu/Pendatang dari Form
        $jumlahTamu = (int) $validated['guests'];

        // 4. Tentukan Harga Dasar Per Orang Per Malam
        $roomType = $request->input('room_type', 'Standard Room');
        $hargaPerMalam = 950000; // Default Standard Room

        if ($roomType === 'Deluxe King') {
            $hargaPerMalam = 1250000;
        } elseif ($roomType === 'Suite') {
            $hargaPerMalam = 1850000;
        }

        // 5. KALKULASI TOTAL: Durasi x Jumlah Tamu x Harga
        $totalPrice = $durasiMalam * $jumlahTamu * $hargaPerMalam;

        // 6. Simpan ke Database
        $booking = Booking::create([
            'user_id'     => auth()->id(),
            'destination' => $validated['destination'],
            'check_in'    => $validated['check_in'],
            'check_out'   => $validated['check_out'],
            'guests'      => $jumlahTamu,
            'room_type'   => $roomType,
            'total_price' => $totalPrice,
            'status'      => 'pending',
        ]);

        return redirect()->back()->with('success', "Pemesanan berhasil! Total ($durasiMalam malam x $jumlahTamu tamu): Rp " . number_format($totalPrice, 0, ',', '.'));
    }
}