<x-app-layout title="Detail Car">
    <div class="max-w-7xl mx-auto px-6 my-4">
        <div class="mb-4">
            <h1 class="text-4xl font-bold">{{ $car->maker->name }} {{ $car->model->name }} - {{ $car->year }}</h1>
            <p>{{ $car->city->name }} - {{ $car->published_at }}</p>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-4 gap-4">
            <div class="col-span-1 md:col-span-3">
                <div class="grid grid-cols-4 gap-4 mb-4">
                    <img src="{{ $car->primaryImages->image_path }}" class="col-span-3 w-full rounded-lg shadow-lg" alt="Ferrari SF25">
                    <div class="col-span-1">
                        @foreach ($car->images as $image)
                            <img src="{{ $image->image_path }}" class="w-full rounded-lg shadow-lg mb-2" alt="Ferrari SF25">\
                        @endforeach
                    </div>
                </div>

                <div class="bg-white p-4 rounded-lg shadow-lg">
                    <h2 class="text-2xl font-bold text-gray-800">Description</h2>
                    <p class="text-gray-600 mt-2">{{ $car->description }}</p>

                    <h2 class="text-2xl font-bold text-gray-800 mt-8">Car Specification</h2>
                    <x-features value="{{ $car->features->abs }}">ABS</x-features>
                    <x-features value="{{ $car->features->air_conditioning }}">Air Conditioning</x-features>
                    <x-features value="{{ $car->features->power_windows }}">Power Windows</x-features>
                    <x-features value="{{ $car->features->power_door_locks }}">Power Door Locks</x-features>
                    <x-features value="{{ $car->features->cruise_control }}">Cruise Control</x-features>
                    <x-features value="{{ $car->features->bluetooth_connectivity }}">Bluetooth Connectivity</x-features>
                    <x-features value="{{ $car->features->remote_start }}">Remote Start</x-features>
                    <x-features value="{{ $car->features->gps_navigation }}">GPS Navigation</x-features>
                    <x-features value="{{ $car->features->climate_control }}">Climate Control</x-features>
                    <x-features value="{{ $car->features->rear_parking_sensors }}">Rear Parking Sensors</x-features>
                    <x-features value="{{ $car->features->heated_seats }}">Heated Seats</x-features>
                    <x-features value="{{ $car->features->leather_seats }}">Leather Seats</x-features>


                </div>
            </div>
            <div>
                <div class="bg-white p-4 m-2 rounded-lg shadow-lg">
                    <div class="flex justify-between items-center border-b border-gray-300 pb-2">
                        <p class="text-2xl font-bold text-gray-800">Rp {{ $car->price }}/day</p>
                        <i class="fa-regular fa-heart"></i>
                    </div>
                    <table class="w-full table-auto my-2 pb-2 borber-b border-gray-300">
                        <tbody>
                            <tr>
                                <td class="py-1">Maker</td>
                                <td class="py-1">{{ $car->maker->name }}</td>
                            </tr>
                            <tr>
                                <td class="py-1">Model</td>
                                <td class="py-1">{{ $car->model->name }}</td>
                            </tr>
                            <tr>
                                <td class="py-1">Year</td>
                                <td class="py-1">{{ $car->year }}</td>
                            </tr>
                            <tr>
                                <td class="py-1">Car Type</td>
                                <td class="py-1">{{ $car->carType->name }}</td>
                            </tr>
                            <tr>
                                <td class="py-1">Fuel Type</td>
                                <td class="py-1">{{ $car->fuelType->name }}</td>
                            </tr>
                        </tbody>
                    </table>
                    <div class="flex items-center gap-4 my-2">
                        <img src="https://thumbs.dreamstime.com/b/portrait-beautiful-happy-woman-white-teeth-smiling-beauty-attractive-healthy-girl-perfect-smile-blonde-hair-fresh-face-76137815.jpg"  class="w-14 h-14 rounded-full object-cover object-center">
                        <div>
                            <p class="text-gray-800 font-bold">{{  $car->owner->name }}</p>
                            <p class="text-gray-500">Owner</p>
                        </div>
                    </div>

                    <div class="grid grid-cols-1 gap-2">
                        <x-button color="primary">Rent Now</x-button>
                        <x-button color="secondary">Add to Wishlist</x-button>
                        <x-button color="tertiary" flex=true><i class="fa-brands fa-whatsapp"></i>{{ $car->owner->phone }}</x-button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
