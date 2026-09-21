<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard Admin - StayEase</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>
<body>

    <div class="header">
        <h2 style="margin: 0;">StayEase Admin Panel</h2>
        <div style="font-size: 14px;">
            Logged in as: <strong>{{ session('admin_email') }}</strong>
        </div>
    </div>

    <div class="table-container">
        <h3 style="margin-top: 0; color: #2c3e50;">Data Reservasi Tamu</h3>
        
        <table>
            <thead>
                <tr>
                    <th>No</th>
                    <th>Nama Tamu</th>
                    <th>Kontak (Email / No. HP)</th>
                    <th>Kamar</th>
                    <th>Check-In</th>
                    <th>Check-Out</th>
                    <th>Permintaan Khusus</th>
                </tr>
            </thead>
            <tbody>
                <!-- Mengecek apakah data bookings ada isinya -->
                @if(!empty($bookings))
                    @php $i = 1; @endphp
                    
                    <!-- Looping data dari Firebase -->
                    @foreach($bookings as $key => $booking)
                        <tr>
                            <td>{{ $i++ }}</td>
                            <td style="font-weight: bold; color: #2c3e50;">{{ $booking['name'] ?? '-' }}</td>
                            <td>
                                {{ $booking['email'] ?? '-' }} <br>
                                <span style="color: #7f8c8d; font-size: 12px;">📞 {{ $booking['phone'] ?? '-' }}</span>
                            </td>
                            <td><span class="badge">{{ $booking['room'] ?? '-' }}</span></td>
                            <td>{{ $booking['check_in'] ?? '-' }}</td>
                            <td>{{ $booking['check_out'] ?? '-' }}</td>
                            <td style="font-style: italic; color: #7f8c8d;">{{ $booking['special_requests'] ?? '-' }}</td>
                        </tr>
                    @endforeach
                @else
                    <!-- Tampilan jika belum ada yang booking -->
                    <tr>
                        <td colspan="7" style="text-align: center; padding: 30px; color: #7f8c8d;">
                            Belum ada data reservasi saat ini.
                        </td>
                    </tr>
                @endif
            </tbody>
        </table>
    </div>

</body>
</html>