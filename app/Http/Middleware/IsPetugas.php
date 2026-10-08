<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class IsPetugas
{
    /**
     * Handle an incoming request.
     */
    public function handle(Request $request, Closure $next): Response
    {
        // Cek apakah user sudah login dan role-nya adalah petugas
        if (auth()->check() && auth()->user()->role === 'petugas') {
            return $next($request);
        }

        // Jika request dari API/AJAX, kembalikan JSON
        if ($request->expectsJson()) {
            return response()->json(['message' => 'Anda tidak memiliki hak akses.'], 403);
        }

        // Jika dari browser biasa, alihkan ke halaman utama/login
        return redirect('/login')->with('error', 'Anda tidak memiliki hak akses untuk halaman ini.');
    }
}