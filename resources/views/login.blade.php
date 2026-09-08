@extends('layouts.app')

@section('content')
<div class="auth-container">

    <h2 class="auth-title">Welcome back</h2>
    <p class="auth-subtitle">Please enter your details to sign in.</p>

    {{-- Pesan Sukses Setelah Register --}}
    @if (session('success'))
        <div style="color: #38a169; font-size: 13px; margin-bottom: 15px;">
            {{ session('success') }}
        </div>
    @endif

    {{-- Pesan Error Jika Login Gagal --}}
    @if ($errors->any())
        <div style="color: #e53e3e; font-size: 13px; margin-bottom: 15px;">
            {{ $errors->first() }}
        </div>
    @endif

    {{-- 1. Arahkan action ke route('login') --}}
    <form action="{{ route('login') }}" method="POST">
        @csrf

        <div class="form-group">
            <label class="form-label">EMAIL</label>
            {{-- 2. Tambahkan name="email" --}}
            <input type="email" name="email" class="form-input" placeholder="you@example.com" value="{{ old('email') }}" required>
        </div>

        <div class="form-group form-group-last">
            <label class="form-label">PASSWORD</label>
            {{-- 3. Tambahkan name="password" --}}
            <input type="password" name="password" class="form-input" placeholder="••••••••" required>
        </div>

        {{-- 4. Hapus tag <a> dari dalam button --}}
        <button type="submit" class="btn-dark btn-full"><a href="{{ route('index') }}" style="color: white; text-decoration: none;">Sign in</a></button>
    </form>

    <div style="text-align: center; margin-top: 20px;">
        <span style="font-size: 12px; color: #888;">Don't have an account? <a href="{{ route('register') }}" style="color: #111; font-weight: bold;">Sign up</a></span>
    </div>

</div>
@endsection