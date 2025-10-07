@props(['dish'])
<div class="p-4 border-b border-white/10 last:border-b-0">
    
        <h3 class="font-bold text-left">
            {{$dish->name}}
        </h3>
        <p class="text-sm text-white/60 text-left">
            {{$dish->description}}
        </p>
        <div class="flex justify-between items-center mt-1">
        <p class="text-sm text-white/60">Price: {{$dish->price}}</p>
        <p class="text-sm text-white/60">Quantity: {{$dish->pivot->quantity}}</p>
        <form action="/cart/{{$dish->id}}" method="post">
            @csrf
            @method('DELETE')
            <x-button type="submit">
                Remove
            </x-button>
        </form>
        </div>
</div>