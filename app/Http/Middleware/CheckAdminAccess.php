<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;

class CheckAdminAccess
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        if (!(Auth::check()) && (Auth::user()->access !== 'admin')) {
            return redirect()->route('home')->with('error', 'You must be an Admin to access this page.');
        }

        return $next($request); // تأكد من استدعاء الـ middleware التالي
    }
}
