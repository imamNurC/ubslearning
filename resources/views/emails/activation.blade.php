@extends('custom_layout_users.bases.userlayout')

@section('content')
<div style="max-width: 600px; margin: 50px auto; padding: 20px; border: 1px solid #ddd; border-radius: 8px; background-color: #f9f9f9; text-align: center;">
    <h1 style="color: #333; font-size: 24px; margin-bottom: 20px;">Email Verification Required</h1>
    @if (session('success'))
        <p style="color: green; font-size: 16px; margin-bottom: 20px;">{{ session('success') }}</p>
    @endif
    <p style="color: #555; font-size: 14px; margin-bottom: 30px;">
        Please check your email and click the verification link to verify your account.
    </p>
    <form method="POST" action="{{ route('verification.send') }}" style="margin-top: 20px;">
        @csrf
        <button type="submit" style="background-color: #007bff; color: white; padding: 10px 20px; border: none; border-radius: 4px; cursor: pointer;">
            Resend Verification Email
        </button>
    </form>
</div>
@endsection
    
