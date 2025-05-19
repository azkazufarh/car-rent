@props(['value'])

<p class="mt-2 text-gray-700">
    @if ($value) 
        <i class="fa-solid fa-circle-check text-green-400 me-2"></i>
    @else
        <i class="fa-solid fa-circle-xmark text-red-400 me-2"></i>
    @endif

    {{ $slot }}
</p>
