@extends('layouts.app')

@section('content')
    <!-- Hero Section -->
    <p class="hero-subtitle">A simple stay, beautifully designed</p>
    <h1 class="hero-title">Find your room.<br>Make yourself at home.</h1>
    <p class="hero-desc">Comfortable rooms, transparent pricing, and a seamless booking experience.</p>

   <!-- Search Bar -->
    <div class="search-bar">
        <!-- Kita ubah jadi tag <form> supaya datanya bisa dikirim -->
        <form action="{{ url('/search-action') }}" method="GET" class="search-form">

            <div class="search-field">
                <label class="search-label">DESTINATION</label>
                <!-- Pakai input text biasa -->
                <input type="text" name="destination" class="search-input" value="Surabaya, Indonesia" placeholder="Where to?">
            </div>

            <div class="search-field">
                <label class="search-label">CHECK IN</label>
                <!-- type="date" otomatis memunculkan kalender! -->
                <input type="date" name="check_in" class="search-input">
            </div>

            <div class="search-field">
                <label class="search-label">CHECK OUT</label>
                <!-- type="date" otomatis memunculkan kalender! -->
                <input type="date" name="check_out" class="search-input">
            </div>

            <div class="search-field">
                <label class="search-label">GUESTS</label>
                <!-- Tag <select> untuk membuat dropdown pilihan -->
                <select name="guests" class="search-input">
                    <option value="1" selected>1 Person</option>
                    <option value="2">2 People</option>
                    <option value="3">3 People</option>
                    <option value="4">4 People</option>
                </select>
            </div>

            <button type="submit" class="btn-dark">Search rooms</button>
        </form>
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
                <p class="room-desc">A Comfy, chill place to stay.</p>
                <p class="room-features">28 m² · 2 peoples</p>
                <div class="room-footer">
                    <span class="room-price">Rp 950.000 / night</span>
                    <a href="/standard-room" class="btn-link">Lihat</a>
                </div>
            </div>

            <!-- Card 2: Deluxe King -->
            <div class="room-card">
                <img src="{{ asset('images/deluxekingroom.jpeg') }}" alt="Deluxe King" class="room-img">
                <h3 class="room-title">Deluxe King</h3>
                <p class="room-desc">WIder, King Size Bed, and City Views.</p>
                <p class="room-features">38 m² · 2 peoples </p>
                <div class="room-footer">
                    <span class="room-price">Rp 1.250.000 / night</span>
                    <a href="/deluxe-king-room" class="btn-link">Lihat</a>
                </div>
            </div>

            <!-- Card 3: Suite -->
            <div class="room-card">
                <img src="{{ asset('images/suiteroom.jpeg') }}" alt="Suite" class="room-img">
                <h3 class="room-title">Suite</h3>
                <p class="room-desc">Giant room with a separate living area.</p>
                <p class="room-features">52 m² · 2-3 peoples</p>
                <div class="room-footer">
                    <span class="room-price">Rp 1.850.000 / night</span>
                    <a href="/suite-room" class="btn-link">Lihat</a>
                </div>
            </div>
        </div>
    </div>
@endsection
