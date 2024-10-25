<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use Illuminate\Support\Facades\Auth;

class AdminMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next)
    {
        // Periksa apakah pengguna yang login adalah admin
        if (Auth::check() && Auth::user()->type == 'admin') {
            return $next($request);
        }

        // Arahkan kembali ke halaman login jika bukan admin
        return redirect()->route('login')->with('error', 'Access denied!');
    }
}
