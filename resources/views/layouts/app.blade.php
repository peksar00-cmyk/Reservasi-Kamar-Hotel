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
            <a href="#" class="nav-link">Rooms</a>
            <a href="#" class="nav-link">Amenities</a>
            <a href="#" class="nav-link">About</a>
            <a href="/login" class="nav-link" style="margin-left: 20px;">Login</a>
        </div>
    </nav>

    <!-- Tempat Konten Utama -->
    <main class="main-container">
        @yield('content')
    </main>

</body>
</html>
