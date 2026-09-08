<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>StayEase - Hotel Reservation</title>

    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>
<body>

<!-- navbar -->
    <nav class="navbar">
        <h2 class="nav-logo">STAYEASE</h2>
        <div class="nav-links">
            <a href="/" class="nav-link">Rooms</a>
            <a href="#" class="nav-link">About</a>
            <a href="/login" class="nav-link" style="margin-left: 20px;">Login</a>
        </div>
    </nav>

    <!-- Tempat Konten Utama -->
    <main class="main-container">
        @yield('content')
    </main>

<!-- Footer Section -->
    <footer class="footer">
        <div class="footer-container">

            <!-- Kolom 1: About Me / Brand -->
            <div class="footer-col footer-col-main">
                <h2 class="footer-logo">STAYEASE</h2>
                <p class="footer-about">
                    <!-- Silakan ganti teks ini sesuai keinginanmu nanti -->
                    - StayEase Hotel is a cozy and modern hotel that offers a comfortable stay for travelers seeking relaxation and convenience. Our rooms are designed with your comfort in mind, providing a peaceful retreat after a long day of exploring or working.
            </div>

            <!-- Kolom 2: Quick Links -->
            <div class="footer-col">
                <h3 class="footer-title">Explore</h3>
                <ul class="footer-links">
                    <li><a href="#">Rooms & Suites</a></li>
                    <li><a href="#">About Us</a></li>
                </ul>
            </div>

            <!-- Kolom 3: Contact -->
            <div class="footer-col">
                <h3 class="footer-title">Contact</h3>
                <ul class="footer-links">
                    <li><a href="#">nipeksar10@stayease.com</a></li>
                    <li><a href="#">+62 8969 928 4385</a></li>
                    <li><a href="#">Surabaya, Indonesia</a></li>
                </ul>
            </div>

        </div>

        <!-- Bagian Copyright -->
        <div class="footer-bottom">
            &copy; 2026 StayEase Hotel. All rights reserved. Crafted by [Kevinno, Reyhan].
        </div>
    </footer>

</body>
</html>
