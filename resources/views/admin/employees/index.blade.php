<x-layout>
    <x-back-button />
    <x-page-heading>
        Employees
    </x-page-heading>
    <div class="gap-8 mt-6 mx-auto max-w-7xl items-start">
        @foreach ($employees as $employee)
            <div class="bg-green-800 hover:bg-green-700 border border-green-600 rounded-lg p-6 transition-colors duration-200 hover:shadow-lg">
                <h3 class="text-xl text-center font-bold text-white mb-2">{{ $employee->username }}</h3>

                <div class="flex justify-between items-center mt-1">
                    <div>
                        <x-button class="text-xl" href="/admin/employees/{{ $employee->id }}/edit">Edit</x-button>
                    </div>
                    <div>
                        @if ($employee->id != 1)
                        <form action="/admin/employees/{{ $employee->id }}" method="POST">
                            @csrf
                            @method('DELETE')
                            <x-button class="text-xl" type="submit">Delete</x-button>
                        </form>
                        @endif
                    </div>
                </div>
            </div>
        @endforeach
    </div>

    <div class="mt-15 text-center mx-auto max-w-7xl mb-10">
        <x-button class="!text-2xl font-bold !bg-blue-800 !hover:bg-blue-600" href="/admin/employees/create">Create Employee</x-button>
    </div>
</x-layout>