@props(['href', 'title', 'description'])

<a href="{{ $href }}" class="block bg-green-800 hover:bg-green-700 border border-green-600 rounded-lg p-6 transition-colors duration-200 hover:shadow-lg">
    <h3 class="text-xl text-center font-bold text-white mb-2">{{ $title }}</h3>
    <p class="text-green-200 text-sm text-center">{{ $description }}</p>
</a>
