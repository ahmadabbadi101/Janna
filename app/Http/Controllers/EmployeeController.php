<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Employee;

class EmployeeController extends Controller
{
    public function index()
    {
        $employees = Employee::all();
        return view('employees.index', compact('employees'));
    }
    public function create()
    {
        return view('employees.create');
    }
    public function store()
    {
        request()->validate([
            'username' => ['required', 'string', 'min:1', 'max:20'],
            'password' => ['required', 'string', 'min:1', 'max:20'],
        ]);
        Employee::create(request()->all());
        return redirect('/admin/employees');
    }
    public function destroy(Employee $employee)
    {
        if($employee->id == 1)
        {
            return redirect('/admin/employees');
        }
        $employee->delete();
        return redirect('/admin/employees');
    }
    public function edit(Employee $employee)
    {
        return view('employees.edit', compact('employee'));
    }
    public function update(Employee $employee)
    {
        request()->validate([
            'username' => ['required', 'string', 'min:1', 'max:20'],
            'password' => ['required', 'string', 'min:1', 'max:20'],
        ]);
        $employee->update(request()->all());
        return redirect('/admin/employees');
    }
}
