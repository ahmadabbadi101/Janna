@props(['error' => false])

@if ($error)
    <p class="text-sm text-black mt-1">{{ $error }}</p>
@endif
