<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\HttpFoundation\Response;

class AdminOnly
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        // Check if user is authenticated with employees guard
        if (!Auth::guard('employees')->check()) {
            return redirect('/login')->with('error', 'Only employees can access this page.');
        }

        // Get the authenticated employee
        $employee = Auth::guard('employees')->user();
        
        // Check if the employee is admin (id = 1)
        if ($employee->id != 1) {
            return redirect('/waiter')->with('error', 'Only admin can access this page.');
        }

        return $next($request);
    }
}
