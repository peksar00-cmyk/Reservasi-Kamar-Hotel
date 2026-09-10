@extends('layouts.app')

@section('content')
<!-- Kita manfaatkan class detail-container yang sudah ada untuk background putih & shadow -->
<div class="detail-container">

    <h2 class="checkout-title">Confirm your reservation</h2>

    <div class="detail-layout">

        <!-- Bagian Kiri: Guest Details Form -->

<div class="detail-info">
    <h3 class="detail-subtitle">Guest Details</h3>

<div class="form-group">
    <label class="form-label">FULL NAME</label>
    <!-- Ganti menjadi session('user_name') -->
    <input type="text" name="name" class="form-input"
           value="{{ session('user_name') ?? '' }}" required>
</div>

<div class="form-group">
    <label class="form-label">EMAIL</label>
    <!-- Ganti menjadi session('user_email') -->
    <input type="email" name="email" class="form-input"
           value="{{ session('user_email') ?? '' }}" required>
</div>
                        <!-- Tambahan opsional: Catatan khusus -->
                <h3 class="detail-subtitle" style="margin-top: 40px;">Special Requests</h3>
                <div class="form-group form-group-last">
                    <!-- Textarea untuk inputan multi-baris -->
                    <textarea class="form-input" rows="4" placeholder="Any special requests? (Optional)"></textarea>
                </div>
            </form>


        <!-- ... (bagian special requests tetap sama) ... -->
    </form>
</div>

        <!-- Bagian Kanan: Booking Summary -->
        <div class="price-box">
            <!-- Menampilkan gambar kecil kamar yang dipilih -->
            <img src="{{ asset('images/standardroom.jpeg') }}" alt="Standard Room" style="width: 100%; height: 140px; object-fit: cover; border-radius: 8px; margin-bottom: 15px;">

            <h3 class="detail-subtitle" style="margin-bottom: 5px; margin-top: 0;">Standard Room</h3>
            <p class="detail-meta" style="margin-bottom: 20px;">28 m² · 2 guests</p>

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

             <a href="/end">
                <button class="btn-dark btn-full" style="margin-top: 25px;">Confirm & Pay</button>
            </a>
@endsection
