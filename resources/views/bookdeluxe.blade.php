@extends('layouts.app')

@section('content')
<!-- Kita manfaatkan class detail-container yang sudah ada untuk background putih & shadow -->
<div class="detail-container">

    <h2 class="checkout-title">Confirm your reservation</h2>

    <div class="detail-layout">

<form action="/checkout/deluxe" method="POST">
    @csrf

    <div class="form-group">
        <label class="form-label">FULL NAME</label>
        <input type="text" name="name" class="form-input" value="{{ session('user_name') ?? '' }}" required>
    </div>

    <div class="form-group">
        <label class="form-label">EMAIL</label>
        <input type="email" name="email" class="form-input" value="{{ session('user_email') ?? '' }}" required>
    </div>

    <!-- 1. TAMBAHAN: Input Nomor Telepon -->
    <div class="form-group">
        <label class="form-label">PHONE NUMBER</label>
        <input type="tel" name="phone" class="form-input" placeholder="+62" required>
    </div>
    <!-- Input Tanggal Check-in -->
    <div class="form-group">
        <label class="form-label">CHECK-IN DATE</label>
        <input type="date" name="check_in" class="form-input" required
            value="{{ session('check_in') }}" readonly required>
    </div>

    <!-- Input Tanggal Check-out -->
    <div class="form-group">
        <label class="form-label">CHECK-OUT DATE</label>
        <input type="date" name="check_out" class="form-input" required
            value="{{ session('check_out') }}" readonly required>
    </div>

    <h3 class="detail-subtitle" style="margin-top: 40px;">Special Requests</h3>
    <div class="form-group form-group-last">
        <!-- 2. PENTING: Tambahkan name="special_requests" di sini -->
        <textarea name="special_requests" class="form-input" rows="4" placeholder="Any special requests? (Optional)"></textarea>
    </div>

    <!-- 3. TAMBAHAN: Input tersembunyi untuk menyimpan nama kamar -->
    <!-- (Ganti valuenya jadi "Deluxe Room" atau "Suite Room" di file blade lainnya) -->
    <input type="hidden" name="room" value="Deluxe Room">

    <!-- Pastikan tombol submit kamu ada di dalam tag </form> ya! -->
    <button type="submit" class="home-btn" style="width: 100%; margin-top: 20px;">Confirm & Pay</button>

</form>


        <!-- Bagian Kanan: Booking Summary -->
        <div class="price-box">
            <!-- Menampilkan gambar kecil kamar yang dipilih -->
            <img src="{{ asset('images/deluxekingroom.jpeg') }}" alt="Deluxe Room" style="width: 100%; height: 300px; object-fit: cover; border-radius: 8px; margin-bottom: 15px;">

            <h3 class="detail-subtitle" style="margin-bottom: 5px; margin-top: 0;">Deluxe Room</h3>
            <p class="detail-meta" style="margin-bottom: 20px;">35 m² · 2 guests</p>

            <div class="summary-divider"></div>

            <div class="summary-row">
                <span>Check-in</span>
                <span style="color: #111; font-weight: 500;">{{ $checkIn }}</span>
            </div>
            <div class="summary-row">
                <span>Check-out</span>
                <span style="color: #111; font-weight: 500;">{{ $checkOut }}</span>
            </div>

            <div class="summary-divider"></div>

            <!-- number_format digunakan agar angkanya punya titik ribuan otomatis -->
            <div class="summary-row">
                <span>Rp {{ number_format($roomPrice, 0, ',', '.') }} x {{ $nights }} nights</span>
                <span>Rp {{ number_format($subtotal, 0, ',', '.') }}</span>
            </div>
            <div class="summary-row">
                <span>Taxes & Fees (10%)</span>
                <span>Rp {{ number_format($tax, 0, ',', '.') }}</span>
            </div>

            <div class="summary-divider"></div>

            <div class="summary-row total">
                <span>Total</span>
                <span>Rp {{ number_format($grandTotal, 0, ',', '.') }}</span>


            </div>

@endsection
