
@extends('custom_layout_users.bases.userbase')
@section('content')

    <h2>Hello {{ $user->name }},</h2>
    <p>Thank you for registering! Please click the link below to activate your account:</p>
    <a href="{{ $activationUrl }}">Activate Now</a>
    <p>If you didn't create an account, please ignore this email.</p>

@endsection
    
