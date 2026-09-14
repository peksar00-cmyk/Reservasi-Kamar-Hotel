
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Booking Berhasil - StayEase</title>

    <!-- Memanggil file CSS eksternal -->
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>
<body style="margin: 0; font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;">

    <!-- Wrapper agar posisi pop-up pas di tengah layar -->
    <div class="terimakasih-wrapper">
        <div class="success-card">

            <!-- Ikon Centang SVG -->
            <svg class="check-icon" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                <path stroke-linecap="round" stroke-linejoin="round" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
            </svg>

            <h2>Reservasi Berhasil!</h2>
            <p style="color: #666; margin-top: 10px;">
                Terima kasih telah memilih StayEase. Data pesanan Anda telah berhasil masuk ke sistem kami.
            </p>

            <a href="{{ url('/main') }}" class="home-btn">Kembali ke Beranda</a>

        </div>
    </div>

</body>
</html>
