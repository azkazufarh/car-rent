@props(['title' => ''])

<x-base-layout :$title>
    <header class="bg-white border-b border-gray-200">
        <div class="max-w-7xl mx-auto md:flex md:justify-between items-center py-6 px-4">
            <a href="{{ route('home') }}" class="text-2xl text-purple-600 font-black">CarRent</a>
        </div>
    </header>
    <main class="max-w-7xl mx-auto flex items-center gap-2 justify-center mt-4 mb-8">
        <div class="w-1/2">
            {{ $slot }}

            <div class="w-1/2 flex gap-4 mx-auto mt-4">
                <x-button type="button" color="tertiary" flex=true><i class="fa-brands fa-google"></i> Google</x-button>
                <x-button type="button" color="tertiary" flex=true><i class="fa-brands fa-facebook"></i> Facebook</x-button>
            </div>

            @if ($title === "Sign Up")
                <p class="text-center text-gray-600 mt-4">Already have an account? <a href="{{ route('signin') }}" class="text-purple-600 hover:underline">Sign In</a></p>
            @else
                <p class="text-center text-gray-600 mt-4">Don't have an account? <a href="{{ route('signup') }}" class="text-purple-600 hover:underline">Sign Up</a></p>
            @endif
        </div>
        <img src="{{ asset('images/hero.png') }}" alt="">
    </main>
</x-base-layout>
