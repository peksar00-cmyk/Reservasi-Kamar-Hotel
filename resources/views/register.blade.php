@extends('layouts.app')

@section('content')
<div style="max-width: 400px; margin: 60px auto; background: white; padding: 40px; border-radius: 12px; box-shadow: 0 4px 12px rgba(0,0,0,0.03);">


    <h2 style="font-size: 24px; color: #111; margin-top: 0; margin-bottom: 8px; text-align: center;">Welcome back</h2>
    <p style="color: #666; font-size: 13px; text-align: center; margin-bottom: 30px;">Please enter your details to Login.</p>


    <form action="#" method="POST">
        @csrf


        <div style="margin-bottom: 20px;">
            <label style="display: block; font-size: 11px; font-weight: bold; color: #888; margin-bottom: 6px;"> Enter EMAIL</label>
            <input type="email" placeholder="you@example.com" style="width: 100%; padding: 12px 14px; border: 1px solid #ddd; border-radius: 8px; font-size: 14px; box-sizing: border-box; background-color: #faf9f6;">
        </div>


        <div style="margin-bottom: 30px;">
            <label style="display: block; font-size: 11px; font-weight: bold; color: #888; margin-bottom: 6px;"> Enter PASSWORD</label>
            <input type="password" placeholder="••••••••" style="width: 100%; padding: 12px 14px; border: 1px solid #ddd; border-radius: 8px; font-size: 14px; box-sizing: border-box; background-color: #faf9f6;">
        </div>


        <button type="submit" class="btn-dark" style="width: 100%; padding: 14px; font-weight: 600;">Sign in</button>
    </form>

   @endsection
