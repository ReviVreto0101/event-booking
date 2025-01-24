<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class CheckRole
{
    /**
     * Handle an incoming request.
     *
     * @param \Illuminate\Http\Request $request
     * @param \Closure $next
     * @param string $role
     * @return mixed
     */
    public function handle(Request $request, Closure $next, $role)
    {
        // Check if the authenticated user has the correct role
        if (auth()->user()->role !== $role) {
            // If not, redirect them to a different page, e.g., home or an error page
            return redirect('/home');
        }

        return $next($request);
    }
}
