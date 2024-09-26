<?php

namespace App\Http\Middleware;

use App\Models\User;
use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserMiddleware
{
    public function handle(Request $request, Closure $next)
    {
        

        // Cek apakah user login dan memiliki role user
        if (Auth::check() && Auth::user()->role !== User::ROLE_USER) {
            return $next($request);
        }
        
    }
}