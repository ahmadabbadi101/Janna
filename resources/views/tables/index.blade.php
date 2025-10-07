<x-layout>
    <x-back-button />
    <x-page-heading>
        Tables
    </x-page-heading>

    <div class="gap-8 mt-6 mx-auto max-w-7xl items-start">
        @foreach ($tables as $table)
            <div class="bg-green-800 hover:bg-green-700 border border-green-600 rounded-lg p-6 transition-colors duration-200 hover:shadow-lg">
                <h3 class="text-xl text-center font-bold text-white mb-2">{{ $table->username }}</h3>

                <div class="flex justify-between items-center mt-1">
                    <div>
                        <x-button class="text-xl" href="/admin/tables/{{ $table->id }}/edit">Edit</x-button>
                    </div>
                    <div>
                        
                        <form action="/admin/tables/{{ $table->id }}" method="POST">
                            @csrf
                            @method('DELETE')
                            <x-button class="text-xl" type="submit">Delete</x-button>
                        </form>
                        
                    </div>
                </div>
            </div>
        @endforeach
    </div>

    <div class="mt-15 text-center mx-auto max-w-7xl mb-10">
        <x-button class="!text-2xl font-bold !bg-blue-800 !hover:bg-blue-600" href="/admin/tables/create">Create Table</x-button>
    </div>
</x-layout>