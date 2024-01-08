<?php
// app/Http/Middleware/AuthenticateMiddleware.php

namespace App\Http\Middleware;

use App\Http\Controllers\NotificationController;
use Closure;
use Illuminate\Support\Facades\Auth;

class AuthenticateMiddleware
{
    public function handle($request, Closure $next)
    {
        // Periksa apakah pengguna sudah login
        if (Auth::check()) {
            return $next($request);
        }

        // Jika tidak, redirect ke halaman login atau berikan respons sesuai kebutuhan
        return redirect('/login');
    }
}

