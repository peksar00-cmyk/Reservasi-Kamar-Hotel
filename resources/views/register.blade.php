@extends('layouts.app')

@section('content')
<div class="auth-container">

    <h2 class="auth-title">Create an account</h2>
    <p class="auth-subtitle">Please enter your details to sign up.</p>

    {{-- Tampilkan Pesan Error Validasi --}}
    @if ($errors->any())
        <div style="color: #e53e3e; font-size: 13px; margin-bottom: 15px;">
            <ul style="margin: 0; padding-left: 20px;">
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('register') }}" method="POST">
        @csrf

        <div class="form-group">
            <label class="form-label">FULL NAME</label>
            <input type="text" name="name" class="form-input" placeholder="John Doe" value="{{ old('name') }}" required>
        </div>

        <div class="form-group">
            <label class="form-label">EMAIL</label>
            <input type="email" name="email" class="form-input" placeholder="you@example.com" value="{{ old('email') }}" required>
        </div>

        <div class="form-group">
            <label class="form-label">PASSWORD</label>
            <input type="password" name="password" class="form-input" placeholder="••••••••" required>
        </div>

        <div class="form-group form-group-last">
            <label class="form-label">CONFIRM PASSWORD</label>
            <input type="password" name="password_confirmation" class="form-input" placeholder="••••••••" required>
        </div>

        <button type="submit" class="btn-dark btn-full">Sign up</button>
    </form>

    <div style="text-align: center; margin-top: 20px;">
        <span style="font-size: 12px; color: #888;">Already have an account? <a href="{{ route('login') }}" style="color: #111; font-weight: bold;">Sign in</a></span>
    </div>

</div>
@endsection