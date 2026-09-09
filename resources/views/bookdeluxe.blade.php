@extends('layouts.app')

@section('content')
<!-- Kita manfaatkan class detail-container yang sudah ada untuk background putih & shadow -->
<div class="detail-container">

    <h2 class="checkout-title">Confirm your reservation</h2>

    <div class="detail-layout">

        <!-- Bagian Kiri: Guest Details Form -->
        <div class="detail-info">
            <h3 class="detail-subtitle">Guest Details</h3>

            <form action="#" method="POST">
                @csrf
                <div class="form-group">
                    <label class="form-label">FULL NAME</label>
                    <input type="text" class="form-input" placeholder="John Doe" required>
                </div>

                <div class="form-group">
                    <label class="form-label">EMAIL</label>
                    <input type="email" class="form-input" placeholder="you@example.com" required>
                </div>

                <div class="form-group">
                    <label class="form-label">PHONE NUMBER</label>
                    <input type="tel" class="form-input" placeholder="+62 812 3456 7890" required>
                </div>

                <!-- Tambahan opsional: Catatan khusus -->
                <h3 class="detail-subtitle" style="margin-top: 40px;">Special Requests</h3>
                <div class="form-group form-group-last">
                    <!-- Textarea untuk inputan multi-baris -->
                    <textarea class="form-input" rows="4" placeholder="Any special requests? (Optional)"></textarea>
                </div>
            </form>
        </div>

        <!-- Bagian Kanan: Booking Summary -->
        <div class="price-box">
            <!-- Menampilkan gambar kecil kamar yang dipilih -->
            <img src="{{ asset('images/deluxekingroom.jpeg') }}" alt="Deluxe Room" style="width: 100%; height: 140px; object-fit: cover; border-radius: 8px; margin-bottom: 15px;">

            <h3 class="detail-subtitle" style="margin-bottom: 5px; margin-top: 0;">Deluxe Room</h3>
            <p class="detail-meta" style="margin-bottom: 20px;">35 m² · 2 guests</p>

            <div class="summary-divider"></div>

            <div class="summary-row">
                <span>Check-in</span>
                <span style="color: #111; font-weight: 500;">12 Sep 2026</span>
            </div>
            <div class="summary-row">
                <span>Check-out</span>
                <span style="color: #111; font-weight: 500;">14 Sep 2026</span>
            </div>

            <div class="summary-divider"></div>

            <!-- Rincian Harga (Nanti angkanya bisa otomatis dari backend) -->
            <div class="summary-row">
                <span>Rp 950.000 x 2 nights</span>
                <span>Rp 1.900.000</span>
            </div>
            <div class="summary-row">
                <span>-Taxes & Fees (10%)</span>
                <span>Rp 190.000</span>
            </div>

            <div class="summary-divider"></div>

            <div class="summary-row total">
                <span>Total</span>
                <span>-Rp 2.090.000</span>
            </div>

            <button class="btn-dark btn-full" style="margin-top: 25px;">Confirm & Pay</button>
        </div>

    </div>
</div>
@endsection
