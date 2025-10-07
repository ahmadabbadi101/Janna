<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Table;
use App\Models\Employee;

class TableController extends Controller
{
    public function index()
    {
        $tables = Table::all();
        return view('tables.index', compact('tables'));
    }
    public function create()
    {
        $employees = Employee::all();
        return view('tables.create', compact('employees'));
    }
    public function store()
    {
        request()->validate([
            'username' => ['required', 'string', 'min:1', 'max:20'],
            'password' => ['required', 'string', 'min:1', 'max:20'],
            'employee_id' => ['required', 'integer', 'exists:employees,id'],
        ]);
        Table::create(request()->all());
        return redirect('/admin/tables')->with('success', 'Table created successfully.');
    }
    public function destroy(Table $table)
    {
        $table->delete();
        return redirect('/admin/tables')->with('success', 'Table deleted successfully.');
    }
    public function edit(Table $table)
    {
        $employees = Employee::all();
        return view('tables.edit', compact('table', 'employees'));
    }
    public function update(Table $table)
    {
        request()->validate([
            'username' => ['required', 'string', 'min:1', 'max:20'],
            'password' => ['required', 'string', 'min:1', 'max:20'],
            'employee_id' => ['required', 'integer', 'exists:employees,id'],
        ]);
        $table->update(request()->all());
        return redirect('/admin/tables')->with('success', 'Table updated successfully.');
    }
}
