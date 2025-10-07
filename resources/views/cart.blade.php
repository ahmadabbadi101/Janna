<x-layout>
    <x-back-button href="/menu" />
    <x-page-heading>Cart</x-page-heading>
    <div class="gap-8 mt-6 mx-auto max-w-7xl items-start">
        @if (request()->user()->dishes() && request()->user()->dishes()->wherePivot('confirmed', false)->get()->count() > 0)
            <div>
                @foreach (request()->user()->dishes()->wherePivot('confirmed', false)->get() as $dish)
                    <x-cart-item :dish="$dish" />
                @endforeach

                <div class="m-10 flex justify-end">
                    <x-forms.form action="/cart" method="POST">
                        @csrf
                        <x-forms.button type="submit">Confirm Order</x-forms.button>
                    </x-forms.form>
                </div>
            </div>
        @else
            <div class="p-4 text-center text-white/60">
                <p class="text-xl font-bold text-white/40">Your cart is empty</p>
            </div>
        @endif
    </div>
</x-layout>
