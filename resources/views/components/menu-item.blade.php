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
                    <button type="submit"
                        class="bg-white/10 text-white text-sm p-1 rounded-md hover:bg-white/20 transition-colors">
                        Delete
                    </button>
                </form>
                @else
                <form action="" method="post">
                @csrf
                <input type="number" name="quantity" min="1" value="1"
                    class="w-16 bg-white/10 text-white text-sm p-1 rounded-md border border-white/20 focus:border-white/40 focus:outline-none">
                <button type="submit"
                    class="bg-white/10 text-white text-sm p-1 rounded-md hover:bg-white/20 transition-colors">
                    Add to Cart
                </button>
                </form>
                @endif
            </div>
        </div>
</div>
