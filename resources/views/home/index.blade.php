<x-app-layout title="Home">
    <div class="bg-gray-100">
        <div class="min-h-[80vh] px-6 flex items-center justify-center">
            <div class="flex flex-col gap-4 max-w-2xl">
                <h1 class="text-5xl font-extrabold">Modern Way To Rent Sports Car In Your Phone!</h1>
                <p class="text-gray-600">Rent a sports car in your phone, wherever you are. It's easy, simple and fun.</p>
            </div>
            <img src="{{ asset('images/hero.png') }}" alt="">
        </div>
    </div>

    <x-search-form action="/search" method="GET" />

    <div class="px-6">
        <h2 class="text-3xl font-bold">Popular Cars</h2>
        <div class="grid grid-cols-4 gap-4 mt-4">
            @foreach ($cars as $car)
                <x-card :$car />
            @endforeach
        </div>
    </div>
</x-app-layout>
