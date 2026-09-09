@extends('layouts.app')

@section('content')
<div class="detail-container">

    <!-- Gambar Kamar Utama -->
    <img src="{{ asset('images/suiteroom.jpeg') }}" alt="Suite Room" class="detail-main-img">

    <div class="detail-layout">

        <!-- Bagian Kiri: Deskripsi & Fasilitas -->
        <div class="detail-info">
            <h2 class="detail-title">Suite Room</h2>
            <p class="detail-meta">52 m² · 2 guests · 1 King Bed</p>

            <p class="detail-desc">
                A luxurious and spacious suite designed for comfort and relaxation. Featuring a king-sized bed, separate living area, modern amenities, and elegant décor, this suite offers the perfect retreat after a day of exploration or business meetings.
            </p>
            <h3 class="detail-subtitle">Room Amenities</h3>
            <div class="amenities-grid">
                <div class="amenity-item">✓ Way Larger Area</div>
                <div class="amenity-item">✓ Free 5G Wi-Fi</div>
                <div class="amenity-item">✓ Air Conditioning</div>
                <div class="amenity-item">✓ Wide-screen TV</div>
                <div class="amenity-item">✓ En-suite Bathroom</div>
                <div class="amenity-item">✓ Daily Housekeeping</div>
                <div class="amenity-item">✓ Coffee/Tea Maker</div>
                <div class="amenity-item">✓ Mini Bar</div>
                <div class="amenity-item">✓ Living Area</div>
                <div class="amenity-item">✓ Work Desk</div>
            </div>
        </div>

        <!-- Bagian Kanan: Kotak Harga & Pesan -->
        <div class="price-box">
            <h3 class="price-amount">Rp 1.850.000</h3>
            <p class="price-unit">per night</p>


             <a href="{{ url('/checkout/suite') }}" class="btn-dark btn-full" style="display: block; text-decoration: none;">Reserve Now</a>

            <p class="price-notice">You won't be charged yet</p>
        </div>

    </div>
</div>
@endsection

