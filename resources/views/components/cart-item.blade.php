@props(['dish', 'employee' => false])
<div class="p-4 border-b border-white/10 last:border-b-0">
    
        <h3 class="font-bold text-left">
            {{$dish->name}}
        </h3>
        <p class="text-sm text-white/60 text-left">
            {{$dish->description}}
        </p>
        <div class="flex justify-between items-center mt-1">
        @if (! $employee)
        <p class="text-sm text-white/60">Price: {{$dish->price}}</p>
        @endif
        <p class="text-sm text-white/60">Quantity: {{$dish->pivot->quantity}}</p>
        @if ($employee)
        <p class="text-sm text-white/60">Table: {{$dish->pivot->table_id}}</p>
        @endif

        @if (! $employee)
        <form action="/cart/{{$dish->id}}" method="post">
            @csrf
            @method('DELETE')
            <x-button type="submit">
                Remove
            </x-button>
        </form>

        @else
        <form action="/waiter/{{$dish->id}}" method="post">
            @csrf
            @method('DELETE')
            <input type="hidden" name="table_id" value="{{$dish->pivot->table_id}}">
            <x-button type="submit">
                Ready
            </x-button>
        </form>
        @endif

        </div>
</div>