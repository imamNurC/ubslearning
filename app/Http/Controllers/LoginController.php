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

        // dd($request->all());

        $credentials = $request->validate([
            'email' => 'required|email:dns',
            'password' => 'required'
        ]);


        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();

            $user = Auth::user();

            if ($user->type == 'admin') {
                return redirect()->intended('/dashboardAdmin');
            } elseif ($user->type == 'user') {
                return redirect()->route('home', ['id_customer' => $user->id_customer]);
            }
        }

        return back()->with('loginError', 'Login Failed!');
    }

    public function logout() {
        Auth::logout();

        request()->session()->invalidate();
        request()->session()->regenerateToken();

        return redirect('/login');

    }
}
