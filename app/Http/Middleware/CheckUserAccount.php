<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;

class CheckUserAccount
{
    public function handle($request, Closure $next)
    {
        // Check if the user is authenticated
        if (Auth::check()) {
            // Check if the user account exists
            $user = Auth::user();

            if (!$user->account_exists) {
                // Redirect the user or perform any other action
                return redirect()->route('/');
            }
        }

        return $next($request);
    }
}
