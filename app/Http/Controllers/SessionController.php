<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\ValidationException;
use App\Models\Employee;
use App\Models\Table;
use Illuminate\Support\Facades\Hash;

class SessionController extends Controller
{
    public function create()
    {
        return view('login');
    }
    public function store()
    {
        $attributes = request()->validate([
            'username' => ['required'],
            'password' => ['required'],
            'user_type' => ['required', 'in:Customer,Staff']
        ]);

        if($attributes['user_type'] === 'Staff')
        {
            $employee = Employee::where('username', strtolower($attributes['username']))->first();

            if(!$employee || !Hash::check($attributes['password'], $employee->password))
            {
                throw ValidationException::withMessages([
                    'username' => 'Sorry these credentials do not match'
                ]);
            }
            Auth::guard('employees')->login($employee);
            request()->session()->regenerate();

            return $employee->id == 1 ? redirect('/admin') : redirect('/waiter');
        }
        
        else
        {
            $customer = Table::where('username', $attributes['username'])->first();

            if(!$customer || !Hash::check($attributes['password'], $customer->password))
            {
                throw ValidationException::withMessages([
                    'username' => 'Sorry these credentials do not match'
                ]);
            }
            Auth::guard('tables')->login($customer);
            request()->session()->regenerate();
            return redirect('/menu');
        }
    }
    public function destroy()
    {
        Auth::guard('employees')->logout();
        Auth::guard('tables')->logout();
        Auth::logout();
        request()->session()->invalidate();
        request()->session()->regenerateToken();
        return redirect('/');
    }
}
