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
                
                <x-menu-item name="Chicken Wings" price="12">
                    Chicken wings marinated in our signature sauce and served with a side of celery and blue cheese dressing.
                </x-menu-item>

                <x-menu-item name="Chicken Wings" price="12">
                    Chicken wings marinated in our signature sauce and served with a side of celery and blue cheese dressing.
                </x-menu-item>
                <x-menu-item name="Chicken Wings" price="12">
                    Chicken wings marinated in our signature sauce and served with a side of celery and blue cheese dressing.
                </x-menu-item>

            </x-menu-section>

            <x-menu-section>
                <x-section-heading>
                    Platters
                </x-section-heading>
                <x-menu-item name="Chicken Wings" price="12">
                    Chicken wings marinated in our signature sauce and served with a side of celery and blue cheese dressing.
                </x-menu-item>
            </x-menu-section>

            <x-menu-section>
                <x-section-heading>
                    Sandwiches
                </x-section-heading>
                <x-menu-item name="Chicken Wings" price="12">
                    Chicken wings marinated in our signature sauce and served with a side of celery and blue cheese dressing.
                </x-menu-item>
            </x-menu-section>

            <x-menu-section>
                <x-section-heading>
                    Drinks
                </x-section-heading>
                <x-menu-item name="Chicken Wings" price="12">
                    Chicken wings marinated in our signature sauce and served with a side of celery and blue cheese dressing.
                </x-menu-item>
            </x-menu-section>
        </div>
        <a href="#">
            <img src="{{ Vite::asset('resources/images/cart-icon.png') }}" alt="cart" class="fixed bottom-6 right-6 w-28 h-15 cursor-pointer hover:scale-110 transition-transform">
        </a>
    </div>
</x-layout>