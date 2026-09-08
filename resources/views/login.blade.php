@extends('layouts.app')

@section('content')
<div class="auth-container">

    <h2 class="auth-title">Welcome back</h2>
    <p class="auth-subtitle">Please enter your details to sign in.</p>

    <form action="#" method="POST">
        @csrf

        <div class="form-group">
            <label class="form-label">EMAIL</label>
            <input type="email" class="form-input" placeholder="you@example.com">
        </div>

        <div class="form-group form-group-last">
            <label class="form-label">PASSWORD</label>
            <input type="password" class="form-input" placeholder="••••••••">
        </div>

        <button type="submit" class="btn-dark btn-full">Sign in</button>
    </form>
 <div style="text-align: center; margin-top: 20px;">
        <span style="font-size: 12px; color: #888;">Don't have an account? <a href="/register" style="color: #111; font-weight: bold;">Sign up</a></span>

</div>
@endsection
