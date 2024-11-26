<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use Illuminate\Support\Facades\Auth;

class MentorMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next)
    {
        // Periksa apakah pengguna yang login adalah mentor
        if (Auth::guard('kta')->check() && Auth::guard('kta')->user()->type == 'mentor') {
            return $next($request);
        }

        // Arahkan kembali ke halaman login mentor jika bukan mentor
        return redirect()->route('/login-mentor')->with('error', 'Access denied!');
    }
}
