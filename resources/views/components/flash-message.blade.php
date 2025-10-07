@if (session('success'))
    <div class="bg-green-600 text-white px-4 py-3 rounded-md mb-4">
        {{ session('success') }}
    </div>
@endif

@if (session('error'))
    <div class="bg-red-600 text-white px-4 py-3 rounded-md mb-4">
        {{ session('error') }}
    </div>
@endif

@if (session('warning'))
    <div class="bg-yellow-600 text-white px-4 py-3 rounded-md mb-4">
        {{ session('warning') }}
    </div>
@endif

@if (session('info'))
    <div class="bg-blue-600 text-white px-4 py-3 rounded-md mb-4">
        {{ session('info') }}
    </div>
@endif
