<x-layout>
    <x-back-button />
    <x-page-heading>
        Dishes
    </x-page-heading>
    <div class="grid lg:grid-cols-4 gap-8 mt-6 mx-auto max-w-7xl items-start">
            <x-menu-section>
                <x-section-heading>
                    Appetizers
                </x-section-heading>
                
                @foreach ($appetizers as $appetizer)
                    <x-menu-item :dish="$appetizer" :admin="true" /> 
                @endforeach
            </x-menu-section>

            <x-menu-section>
                <x-section-heading>
                    Platters
                </x-section-heading>
                @foreach ($platters as $platter)
                    <x-menu-item :dish="$platter" :admin="true" />
                @endforeach
            </x-menu-section>

            <x-menu-section>
                <x-section-heading>
                    Sandwiches
                </x-section-heading>
                @foreach ($sandwiches as $sandwich)
                    <x-menu-item :dish="$sandwich" :admin="true" />
                @endforeach
                
            </x-menu-section>

            <x-menu-section>
                <x-section-heading>
                    Drinks
                </x-section-heading>
                @foreach ($drinks as $drink)
                    <x-menu-item :dish="$drink" :admin="true" />
                @endforeach
                
            </x-menu-section>
        </div>

        <div class="mt-15 text-center mx-auto max-w-7xl mb-10">
            <a href="/admin/dishes/create"><x-button class="!text-2xl font-bold !bg-blue-800 !hover:bg-blue-600">Create Dish</x-button></a>
        </div>
    </div>
</x-layout>