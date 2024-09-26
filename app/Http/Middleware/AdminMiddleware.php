<?php

namespace App\Http\Middleware;

use App\Models\User;
use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminMiddleware
{
    public function handle(Request $request, Closure $next)
    {
        // Cek apakah user login dan memiliki role admin
        if (Auth::check() && Auth::user()->role !== User::ROLE_ADMIN) {
            return $next($request);
        }
    }
}