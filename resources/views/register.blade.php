@extends('layouts.app')

@section('content')
<div class="auth-container" style="margin-top: 40px;">

    <h2 class="auth-title">Create an account</h2>
    <p class="auth-subtitle">Join StayEase for a seamless booking experience.</p>

    <form action="#" method="POST">
        @csrf

        <div class="form-group">
            <label class="form-label">FULL NAME</label>
            <input type="text" class="form-input" placeholder="John Doe">
        </div>

        <div class="form-group">
            <label class="form-label">EMAIL</label>
            <input type="email" class="form-input" placeholder="you@example.com">
        </div>

        <div class="form-group form-group-last">
            <label class="form-label">PASSWORD</label>
            <input type="password" class="form-input" placeholder="••••••••">
        </div>

        <button type="submit" class="btn-dark btn-full">Create account</button>
    </form>

</div>
@endsection
