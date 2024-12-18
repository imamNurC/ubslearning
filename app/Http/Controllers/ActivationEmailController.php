<?php

namespace App\Http\Controllers;

use App\Mail\ActivationEmail;
use App\Models\Customer;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\URL;
use Illuminate\Support\Facades\Mail;

class ActivationEmailController extends Controller
{
    public function sendActivationEmail($user)
    {
        $activationUrl = URL::temporarySignedRoute(
            'activation.verify', // named route for activation
            Carbon::now()->addMinutes(60), // Expiry time
            ['user' => $user->id] // Parameters for the route
        );

        Mail::to($user->email)->send(new ActivationEmail($user, $activationUrl));
    }

    public function verifyActivation(Request $request, $username)
    {
        // Find the user by username
        $user = Customer::where('username', $username)->firstOrFail();

        // Check if the URL is valid and not expired
        if (!$request->hasValidSignature()) {
            return response()->json(['error' => 'Invalid or expired link.'], 400);
        }

        // Activate the user (update the is_active status)
        $user->update(['is_active' => true]);

        // After activation, redirect to the home page
        return redirect()->route('home', ['username' => $user->username])->with('success', 'Your account has been activated!');
    }
}
