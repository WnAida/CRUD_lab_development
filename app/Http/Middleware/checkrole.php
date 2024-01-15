<?php

// app/Http/Middleware/CheckRole.php

// app/Http/Middleware/CheckRole.php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class CheckRole
{
    public function handle(Request $request, Closure $next, ...$roles)
    {
        // Check if the user has the 'admin' role based on email
        foreach ($roles as $role) {
            if ($request->user() && $this->checkRoleByEmail($request->user()->email, $role)) {
                return $next($request);
            }
        }

        // Redirect or handle unauthorized access
        return redirect()->route('home')->with('error', 'Unauthorized access');
    }

    protected function checkRoleByEmail($email, $role)
    {
        // Check if the email corresponds to the specified roles
        switch ($role) {
            case 'admin':
                return $email === 'admin@staff.com';
            default:
                return false;
        }
    }
}



