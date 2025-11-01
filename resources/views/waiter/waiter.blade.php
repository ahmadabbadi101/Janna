<x-layout>
    <x-page-heading>
        Welcome, {{ $user->username }}!
    </x-page-heading>

    <div class="gap-8 mt-6 mx-auto max-w-7xl items-start">
        <h2 class="text-2xl font-bold text-white mb-2">Orders</h2>
        <div>
            @foreach ($user->tables as $table)
                    @foreach ($table->dishes as $dish)
                        @if ($dish->pivot->confirmed == true)
                            <x-cart-item :dish="$dish" :employee="true" />
                        @endif
                    @endforeach
            @endforeach
        </div>
    </div>
</x-layout>