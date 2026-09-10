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
   <div class="room-grid" style="padding-top: 50px;">
    @foreach($rooms as $room)
    <div class="room-card">
        <!-- Menampilkan gambar dinamis dari database -->
        <img src="{{ asset('images/' . $room->image) }}" alt="{{ $room->name }}" class="room-img">
        <h3 class="room-name">{{ $room->name }}</h3>
        <p class="room-desc">{{ $room->description }}</p>
        <!-- Mengarahkan ke detail kamar spesifik berdasarkan ID -->
    </div>
    @endforeach
    </div>
@endsection
