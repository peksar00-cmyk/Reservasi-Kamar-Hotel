@extends('layouts.app')

@section('content')
<div class="detail-container">

    <!-- Gambar Kamar Utama -->
    <img src="{{ asset('images/deluxekingroom.jpeg') }}" alt="Deluxe King Room" class="detail-main-img">

    <div class="detail-layout">

        <!-- Bagian Kiri: Deskripsi & Fasilitas -->
        <div class="detail-info">
            <h2 class="detail-title">Deluxe King Room</h2>
            <p class="detail-meta">38 m² · 2 guests · 1 King Bed</p>

            <p class="detail-desc">
                Relax in style in our Deluxe King Room, featuring a plush king-size bed, a dedicated workspace, and a marble bathroom with a rainfall shower.
            </p>

            <h3 class="detail-subtitle">Room Amenities</h3>
            <div class="amenities-grid">
                <div class="amenity-item">✓ Free 5G Wi-Fi</div>
                <div class="amenity-item">✓ Air Conditioning</div>
                <div class="amenity-item">✓ Flat-screen TV</div>
                <div class="amenity-item">✓ En-suite Bathroom</div>
                <div class="amenity-item">✓ Daily Housekeeping</div>
                <div class="amenity-item">✓ Coffee/Tea Maker</div>
                <div class="amenity-item">✓ Mini Bar</div>
            </div>
        </div>

        <!-- Bagian Kanan: Kotak Harga & Pesan -->
        <div class="price-box">
            <h3 class="price-amount">Rp 1.250.000</h3>
            <p class="price-unit">per night</p>

            <a href="/checkout-deluxe">
                <button class="btn-dark btn-full">Reserve Now</button>
            </a >
            <p class="price-notice">You won't be charged yet</p>
        </div>

    </div>
</div>
@endsection
