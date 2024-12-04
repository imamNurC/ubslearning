<?php

namespace App\Http\Controllers;

use App\Models\Customer;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function index()
    {
        return view('admin.index');
    }

    public function authenticate(Request $request)
    {
        // Validate the request credentials
        $credentials = $request->validate([
            'email' => 'required|email:dns',
            'password' => 'required'
        ]);

        // Try to authenticate using the default guard (admin or user)
        if (Auth::attempt($credentials)) {
            $request->session()->regenerate(); // Regenerate session to prevent fixation

            $user = Auth::user();

            return $this->redirectUserBasedOnType($user); // Refactor the redirect logic
        }

        // Try to authenticate using the 'kta' guard
        if (Auth::guard('kta')->attempt($credentials)) {
            $request->session()->regenerate(); // Regenerate session for 'kta' guard

            $user = Auth::guard('kta')->user();

            return $this->redirectUserBasedOnType($user); // Refactor the redirect logic
        }

        return back()->with('loginError', 'Login Failed!');
    }

    private function redirectUserBasedOnType($user)
    {
        if ($user->type === 'admin') {
            return redirect()->intended('/dashboardAdmin');
        }

        if ($user->type === 'user') {
            return redirect()->route('home', ['username' => $user->username]);
        }

        if ($user->type === 'mentor') {
            return redirect()->intended('/anggota-kta');
        }

        // Fallback case if no matching type is found
        return redirect('/login')->with('loginError', 'User type not recognized');
    }

    public function logout()
    {
        Auth::logout();
        Auth::guard('kta')->logout();

        request()->session()->invalidate();
        request()->session()->regenerateToken();

        return redirect('/login');
    }
}
