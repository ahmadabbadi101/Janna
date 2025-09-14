<x-layout>
    <x-back-button href="/admin/employees" />
    <x-page-heading>
        Edit Employee
    </x-page-heading>
    <x-forms.form action="/admin/employees/{{ $employee->id }}" method="POST">
        @csrf
        @method('PUT')
        <x-forms.input type="text" label="Username" name="username" value="{{ $employee->username }}" />
        <x-forms.input type="password" label="Password" name="password" />
        <x-forms.button type="submit">Update</x-forms.button>
    </x-forms.form>
</x-layout>