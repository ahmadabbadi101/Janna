<x-layout>
    <x-back-button href="/admin/employees" />
    <x-page-heading>
        Create Employee
    </x-page-heading>
    <x-forms.form action="/admin/employees" method="POST">
        @csrf
        <x-forms.input type="text" label="Username" name="username" />
        <x-forms.input type="password" label="Password" name="password" />
        <x-forms.button type="submit">Create</x-forms.button>
    </x-forms.form>
</x-layout>