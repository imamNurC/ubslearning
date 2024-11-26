<?php

namespace App\Http\Controllers\kta;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class MentorLoginController extends Controller
{
    public function index()
    {
        return view('kta_auth.index');
    }



    public function loginKta(Request $request)
    {

        // Validasi input (email dan password)
        $credentials = $request->validate([
            'email' => 'required|email:dns',
            'password' => 'required'
        ]);

        // dd($credentials);

        // Coba autentikasi dengan guard 'kta' (untuk login mentor)
        if (Auth::guard('kta')->attempt($credentials)) {
            // Regenerasi session jika login berhasil
            $request->session()->regenerate();

            // Ambil data user yang sudah login
            $user = Auth::guard('kta')->user();

            // Periksa apakah tipe user adalah mentor
            if ($user->type == 'mentor') {
                return redirect()->intended('/anggota-kta'); // Arahkan ke halaman yang sesuai
            }
        }

        // Jika login gagal, arahkan kembali ke halaman login dengan pesan error
        return back()->with('loginError', 'Login Failed!');
    }

    // Logout untuk mentor
    public function logoutMentor()
    {
        // Logout dari guard 'kta'
        Auth::guard('kta')->logout();

        // Invalidasi session
        request()->session()->invalidate();
        request()->session()->regenerateToken();

        return redirect('/login-mentor'); // Arahkan kembali ke halaman login mentor
    }
}
