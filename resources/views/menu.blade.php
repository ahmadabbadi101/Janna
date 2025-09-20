<x-layout>
    <div>
        <x-page-heading>
            Menu
        </x-page-heading>

        <div class="grid lg:grid-cols-4 gap-8 mt-6 mx-auto max-w-7xl items-start">
            <x-menu-section>
                <x-section-heading>
                    Appetizers
                </x-section-heading>
                
                @foreach ($appetizers as $appetizer)
                    <x-menu-item :dish="$appetizer" />
                @endforeach

            </x-menu-section>

            <x-menu-section>
                <x-section-heading>
                    Platters
                </x-section-heading>
                
                @foreach ($platters as $platter)
                    <x-menu-item :dish="$platter" />
                @endforeach
            </x-menu-section>

            <x-menu-section>
                <x-section-heading>
                    Sandwiches
                </x-section-heading>
                
                @foreach ($sandwiches as $sandwich)
                    <x-menu-item :dish="$sandwich" />
                @endforeach
            </x-menu-section>

            <x-menu-section>
                <x-section-heading>
                    Drinks
                </x-section-heading>
                
                @foreach ($drinks as $drink)
                    <x-menu-item :dish="$drink" />
                @endforeach
            </x-menu-section>
        </div>
        <a href="#">
            <img src="{{ Vite::asset('resources/images/cart-icon.png') }}" alt="cart" class="fixed bottom-6 right-6 w-28 h-15 cursor-pointer hover:scale-110 transition-transform">
        </a>
    </div>
</x-layout>