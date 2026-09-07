@extends('layouts.app')

@section('content')
    <!-- Hero Section -->
    <p class="hero-subtitle">A simple stay, beautifully designed</p>
    <h1 class="hero-title">Find your room.<br>Make yourself at home.</h1>
    <p class="hero-desc">Comfortable rooms, transparent pricing, and a seamless booking experience.</p>

    <!-- Search Bar -->
    <div class="search-bar">
        <div>
            <span class="search-label">DESTINATION</span>
            <span class="search-value">Surabaya, Indonesia</span>
        </div>
        <div>
            <span class="search-label">CHECK IN</span>
            <span class="search-value">12 Sep 2026</span>
        </div>
        <div>
            <span class="search-label">CHECK OUT</span>
            <span class="search-value">14 Sep 2026</span>
        </div>
        <div>
            <span class="search-label">GUESTS</span>
            <span class="search-value">2 Guests · 1 Room</span>
        </div>
        <button class="btn-dark">Search rooms</button>
    </div>

    <!-- Room Selection Section -->
    <div class="rooms-section">
        <h2 class="section-title">Choose your room</h2>
        <p class="section-desc">Thoughtfully designed spaces for work, rest, and everything between.</p>

        <div class="room-grid">
            <!-- Card 1: Standard Room -->
            <div class="room-card">
                <img src="{{ asset('images/standardroom.jpeg') }}" alt="Standard Room" class="room-img">
                <h3 class="room-title">Standard Room</h3>
                <p class="room-desc">Nyaman, tenang, dan cocok untuk 2 org.</p>
                <p class="room-features">28 m² · 2 org</p>
                <div class="room-footer">
                    <span class="room-price">Rp 950.000 / night</span>
                    <a href="#" class="btn-link">Lihat</a>
                </div>
            </div>

            <!-- Card 2: Deluxe King -->
            <div class="room-card">
                <img src="{{ asset('images/deluxekingroom.jpeg') }}" alt="Deluxe King" class="room-img">
                <h3 class="room-title">Deluxe King</h3>
                <p class="room-desc">Lebih luas,tempat tidur king size, dan pemandangam kota.</p>
                <p class="room-features">38 m² · 2 org</p>
                <div class="room-footer">
                    <span class="room-price">Rp 1.250.000 / malam</span>
                    <a href="#" class="btn-link">Lihat</a>
                </div>
            </div>

            <!-- Card 3: Suite -->
            <div class="room-card">
                <img src="{{ asset('images/suiteroom.jpeg') }}" alt="Suite" class="room-img">
                <h3 class="room-title">Suite</h3>
                <p class="room-desc">Ruang yang luas dengan area tamu yang terpisah.</p>
                <p class="room-features">52 m² · 2 org 1 bayi</p>
                <div class="room-footer">
                    <span class="room-price">Rp 1.850.000 / malam</span>
                    <a href="#" class="btn-link">Lihat</a>
                </div>
            </div>
        </div>
    </div>
@endsection
