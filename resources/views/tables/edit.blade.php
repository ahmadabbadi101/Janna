<x-layout>
    <x-back-button href="/admin/tables" />
    <x-page-heading>
        Edit Table
    </x-page-heading>
    <x-forms.form action="/admin/tables/{{ $table->id }}" method="POST">
        @csrf
        @method('PUT')
        <x-forms.input type="text" label="Username" name="username" value="{{ $table->username }}" />
        <x-forms.input type="password" label="Password" name="password" m/>
        <x-forms.select label="Employee" name="employee_id">
            @foreach($employees as $employee)
                @if($employee->id != 1)
                <option value="{{ $employee->id }}" {{ $table->employee_id == $employee->id ? 'selected' : '' }}>{{ $employee->username }}</option>
                @endif
            @endforeach
        </x-forms.select>
        <x-forms.button type="submit">Update</x-forms.button>
    </x-forms.form>
</x-layout>
