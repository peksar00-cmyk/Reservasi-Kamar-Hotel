<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Login - StayEase</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <style>
        .admin-wrapper {
            display: flex; justify-content: center; align-items: center; min-height: 100vh; background-color: #2c3e50; /* Warna gelap khas admin */
        }
        .admin-card {
            background: white; padding: 40px; border-radius: 12px; box-shadow: 0 4px 15px rgba(0,0,0,0.3); width: 90%; max-width: 350px; text-align: center;
        }
        .admin-input {
            width: 100%; padding: 12px; margin-top: 5px; margin-bottom: 20px; border: 1px solid #ccc; border-radius: 6px; box-sizing: border-box;
        }
        .admin-btn {
            width: 100%; padding: 12px; background: #e74c3c; color: white; border: none; border-radius: 6px; font-weight: bold; cursor: pointer; transition: 0.3s;
        }
        .admin-btn:hover { background: #c0392b; }
        .error-msg { color: #e74c3c; font-size: 14px; margin-bottom: 15px; background: #fadbd8; padding: 10px; border-radius: 5px; }
    </style>
</head>
<body style="margin: 0; font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;">

    <div class="admin-wrapper">
        <div class="admin-card">
            <h2 style="margin-bottom: 5px; color: #2c3e50;">Admin Panel</h2>
            <p style="color: #7f8c8d; font-size: 14px; margin-bottom: 25px;">StayEase Hotel Management</p>

            <!-- Menampilkan pesan error jika login gagal -->
            @if(session('error'))
                <div class="error-msg">{{ session('error') }}</div>
            @endif

            <form action="/login-admin" method="POST">
                @csrf
                <div style="text-align: left;">
                    <label style="font-size: 13px; font-weight: bold; color: #34495e;">EMAIL ADMIN</label>
                    <input type="email" name="email" class="admin-input">
                </div>
                
                <div style="text-align: left;">
                    <label style="font-size: 13px; font-weight: bold; color: #34495e;">PASSWORD</label>
                    <input type="password" name="password" class="admin-input">
                </div>

                <button type="submit" class="admin-btn">Login to Dashboard</button>
            </form>
        </div>
    </div>

</body>
</html>