<x-app-layout title="My Wishlist">
    <div class="max-w-7xl mx-auto px-6 my-4">
        <h1 class="text-4xl font-bold">My Favorite Cars</h1>

        <div class="grid grid-cols-4 gap-4 mt-4">
            @foreach ($cars as $car)
                <x-card :$car watchlist=true />
            @endforeach
        </div>
    </div>
</x-app-layout>
