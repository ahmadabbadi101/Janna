@props(['dish', 'admin' => false])
<div class="p-4 border-b border-white/10 last:border-b-0">
    
        <h3 class="font-bold text-left">
            {{$dish->name}}
        </h3>
        <p class="text-sm text-white/60 text-left">
            {{$dish->description}}
        </p>
        <div class="flex justify-between items-center mt-1">
            <p class="text-sm text-white/60">{{$dish->price}}</p>
            <div class="flex items-center gap-2">
                @if ($admin)
                <form action="/admin/dishes/{{$dish->id}}" method="post">
                    @csrf
                    @method('DELETE')
                    <x-button type="submit">
                        Delete
                    </x-button>
                </form>
                @else
                <form action="/menu/{{$dish->id}}" method="post">
                @csrf
                <input type="number" name="quantity" min="1" value="1"
                    class="w-16 bg-white/10 text-white text-sm p-1 rounded-md border border-white/20 focus:border-white/40 focus:outline-none">
                <x-button type="submit">
                    Add to Cart
                </x-button>
                </form>
                @endif
            </div>
        </div>
</div>
