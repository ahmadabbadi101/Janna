<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Employee;
use App\Models\Table;

class EmployeeController extends Controller
{
    public function index()
    {
        $employees = Employee::all();
        return view('admin.employees.index', compact('employees'));
    }
    public function create()
    {
        return view('admin.employees.create');
    }
    public function store()
    {
        request()->validate([
            'username' => ['required', 'string', 'min:1', 'max:20'],
            'password' => ['required', 'string', 'min:1', 'max:20'],
        ]);
        Employee::create(request()->all());
        return redirect('/admin/employees')->with('success', 'Employee created successfully.');
    }
    public function destroy(Employee $employee)
    {
        
        if($employee->id == 1)
        {
            return redirect('/admin/employees');
        }
        
        $employeeCount = Employee::where('id', '!=', 1)->count();
        if($employeeCount <= 1)
        {
            return redirect('/admin/employees')->with('error', 'Cannot delete the last employee. At least one employee must remain.');
        }
        
        $otherEmployee = Employee::where('id', '<', $employee->id)
            ->where('id', '!=', 1)
            ->orderBy('id', 'desc')
            ->first();
        
        if (!$otherEmployee) {
            $otherEmployee = Employee::where('id', '>', $employee->id)
                ->where('id', '!=', 1) 
                ->orderBy('id', 'asc')
                ->first();
        }
        
        Table::where('employee_id', $employee->id)
            ->update(['employee_id' => $otherEmployee->id]);
        
        $employee->delete();
        return redirect('/admin/employees')->with('success', 'Tables have been reassigned.');
    }
    public function edit(Employee $employee)
    {
        return view('admin.employees.edit', compact('employee'));
    }
    public function update(Employee $employee)
    {
        request()->validate([
            'username' => ['required', 'string', 'min:1', 'max:20'],
            'password' => ['required', 'string', 'min:1', 'max:20'],
        ]);
        $employee->update(request()->all());
        return redirect('/admin/employees')->with('success', 'Employee updated successfully.');
    }
}
