<x-layout>
    <x-back-button href="/admin/tables" />
    <x-page-heading>
        Create Table
    </x-page-heading>
    <x-forms.form action="/admin/tables" method="POST">
        @csrf
        <x-forms.input type="text" label="Username" name="username" />
        <x-forms.input type="password" label="Password" name="password" />
        <x-forms.select label="Employee" name="employee_id">
            @foreach($employees as $employee)
                @if($employee->id != 1)
                <option value="{{ $employee->id }}">{{ $employee->username }}</option>
                @endif
            @endforeach
        </x-forms.select>
        <x-forms.button type="submit">Create</x-forms.button>
    </x-forms.form>
</x-layout>
