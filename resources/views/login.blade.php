@extends('layouts.app')

@section('content')
<div style="max-width: 400px; margin: 60px auto; background: white; padding: 40px; border-radius: 12px; box-shadow: 0 4px 12px rgba(0,0,0,0.03);">

    <!-- Judul Halaman -->
    <h2 style="font-size: 24px; color: #111; margin-top: 0; margin-bottom: 8px; text-align: center;">Welcome back</h2>
    <p style="color: #666; font-size: 13px; text-align: center; margin-bottom: 30px;">Please enter your details to Login.</p>

    <!-- Form Login -->
    <form action="#" method="POST">
        @csrf

        <!-- Input Email -->
        <div style="margin-bottom: 20px;">
            <label style="display: block; font-size: 11px; font-weight: bold; color: #888; margin-bottom: 6px;">EMAIL</label>
            <input type="email" placeholder="you@example.com" style="width: 100%; padding: 12px 14px; border: 1px solid #ddd; border-radius: 8px; font-size: 14px; box-sizing: border-box; background-color: #faf9f6;">
        </div>

        <!-- Input Password -->
        <div style="margin-bottom: 30px;">
            <label style="display: block; font-size: 11px; font-weight: bold; color: #888; margin-bottom: 6px;">PASSWORD</label>
            <input type="password" placeholder="••••••••" style="width: 100%; padding: 12px 14px; border: 1px solid #ddd; border-radius: 8px; font-size: 14px; box-sizing: border-box; background-color: #faf9f6;">
        </div>

        <!-- Tombol Sign In -->
        <button type="submit" class="btn-dark" style="width: 100%; padding: 14px; font-weight: 600;">Login</button>
    </form>

    <div style="text-align: center; margin-top: 20px;">
        <span style="font-size: 12px; color: #888;">Don't have an account? <a href="/register" style="color: #111; font-weight: bold;">Sign up</a></span>

</div>
@endsection
