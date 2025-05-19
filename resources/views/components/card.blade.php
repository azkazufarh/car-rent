@props(['car', 'watchlist' => false])

<a href="{{ route('car.show', $car->id) }}" class="bg-white rounded">
    <img src="{{ $car->primaryImages->image_path }}" class="w-full h-48 object-cover object-center">
    <div class="p-4">
        <div class="flex justify-between items-center">
            <p class="text-gray-400">{{ $car->city->name }}</p>
            @if($watchlist) <i class="fa-solid fa-heart"></i> @else <i class="fa-regular fa-heart"></i> @endif
        </div>
        <h3 class="text-xl font-bold mt-2">{{ $car->year }} - {{ $car->maker->name }} {{ $car->model->name }}</h3>
        <div class="flex justify-between items-center mt-4">
            <span class="text-lg font-bold">Rp {{ $car->price }}/day</span>
            <button class="bg-purple-600 text-white px-4 py-2 rounded-full">Rent Now</button>
        </div>
    </div>
</a>
