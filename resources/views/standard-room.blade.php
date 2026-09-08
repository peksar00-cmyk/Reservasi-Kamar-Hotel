@extends('layouts.app')

@section('content')
<div class="detail-container">

    <!-- Gambar Kamar Utama -->
    <img src="{{ asset('images/standardroom.jpeg') }}" alt="Standard Room" class="detail-main-img">

    <div class="detail-layout">

        <!-- Bagian Kiri: Deskripsi & Fasilitas -->
        <div class="detail-info">
            <h2 class="detail-title">Standard Room</h2>
            <p class="detail-meta">28 m² · 2 guests · 1 King Bed</p>

            <p class="detail-desc">
                A calm, comfortable room for two. Thoughtfully designed with minimalistic touches, this space provides everything you need for a restful stay after a long day of exploring or working.
            </p>

            <h3 class="detail-subtitle">Room Amenities</h3>
            <div class="amenities-grid">
                <div class="amenity-item">✓ Free Wi-Fi</div>
                <div class="amenity-item">✓ Air Conditioning</div>
                <div class="amenity-item">✓ Flat-screen TV</div>
                <div class="amenity-item">✓ En-suite Bathroom</div>
                <div class="amenity-item">✓ Daily Housekeeping</div>
                <div class="amenity-item">✓ Coffee/Tea Maker</div>
            </div>
        </div>

        <!-- Bagian Kanan: Kotak Harga & Pesan -->
        <div class="price-box">
            <h3 class="price-amount">Rp 950.000</h3>
            <p class="price-unit">per night</p>

            <button class="btn-dark btn-full">Reserve Now</button>
            <p class="price-notice">You won't be charged yet</p>
        </div>

    </div>
</div>
@endsection
