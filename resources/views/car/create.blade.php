<x-app-layout title="Add Car">
    <div class="max-w-7xl mx-auto px-6 my-4">
        <h1 class="text-4xl font-bold">Add New Car</h1>

        <form action="" class="mt-4">
            <div class="flex">
                <div class="basis-3/4">
                    <div class="grid grid-cols-1 md:grid-cols-3 gap-4">
                        <div>
                            <label for="maker" class="block text-gray-700">Maker</label>
                            <select name="maker" id="maker" class="w-full border border-gray-300 rounded p-2">
                                <option value="">Maker</option>
                                <option value="Ford">Ford</option>
                                <option value="Toyota">Toyota</option>
                            </select>
                        </div>
                        <div>
                            <label for="model" class="block text-gray-700">Model</label>
                            <select name="model" id="model" class="w-full border border-gray-300 rounded p-2">
                                <option value="">Model</option>
                            </select>
                        </div>
                        <div>
                            <label for="year" class="block text-gray-700">Year</label>
                            <select name="year" id="year" class="w-full border border-gray-300 rounded p-2">
                                <option value="">Year</option>
                                @for ($i= 2025; $i >= 1990; $i--)
                                    <option value="{{ $i }}">{{ $i }}</option>
                                @endfor
                            </select>
                        </div>
                        <div class="col-span-3 text-lg font-bold">Car Type</div>
                        <div>
                            <input type="radio" id="sedan" name="car_type" value="sedan" />
                            <label for="sedan" class="text-gray-700">Sedan</label>
                        </div>
                        <div>
                            <input type="radio" id="hatchback" name="car_type" value="hatchback" />
                            <label for="hatchback" class="text-gray-700">Hatchback</label>
                        </div>
                        <div>
                            <input type="radio" id="SUV" name="car_type" value="SUV" />
                            <label for="SUV" class="text-gray-700">SUV (Sport Utility Vehicle)</label>
                        </div>
                        <div>
                            <label for="price" class="block text-gray-700">Price</label>
                            <input type="number" id="price" name="price" class="w-full border border-gray-300 rounded p-2" />
                        </div>
                        <div>
                            <label for="vincode" class="block text-gray-700">Vin Code</label>
                            <input type="text" id="vincode" name="vincode" class="w-full border border-gray-300 rounded p-2" />
                        </div>
                        <div class="mb-2">
                            <label for="mileage" class="block text-gray-700">Mileage (ml)</label>
                            <input type="text" id="mileage" name="mileage" class="w-full border border-gray-300 rounded p-2" />
                        </div>
                    </div>
                    <div class="grid grid-cols-2 md:grid-cols-4 gap-4 mb-2">
                        <div class="col-span-4 text-lg font-bold">Fuel type</div>
                        <div>
                            <input type="radio" id="gasoline" name="fuel_type" value="gasoline" />
                            <label for="gasoline" class="text-gray-700">Gasoline</label>
                        </div>
                        <div>
                            <input type="radio" id="hatchback" name="fuel_type" value="hatchback" />
                            <label for="hatchback" class="text-gray-700">Diesel</label>
                        </div>
                        <div>
                            <input type="radio" id="electric" name="fuel_type" value="electric" />
                            <label for="electric" class="text-gray-700">Electric</label>
                        </div>
                        <div>
                            <input type="radio" id="hybrid" name="fuel_type" value="hybrid" />
                            <label for="hybrid" class="text-gray-700">Hybrid</label>
                        </div>
                    </div>
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                        <div>
                            <label for="state" class="block text-gray-700">State</label>
                            <select name="state" id="state" class="w-full border border-gray-300 rounded p-2">
                                <option value="">State</option>
                            </select>
                        </div>
                        <div>
                            <label for="region" class="block text-gray-700">Region</label>
                            <select name="region" id="region" class="w-full border border-gray-300 rounded p-2">
                                <option value="">Region</option>
                            </select>
                        </div>
                        <div>
                            <label for="address" class="block text-gray-700">Address</label>
                            <input type="text" id="address" name="address" class="w-full border border-gray-300 rounded p-2" />
                        </div
                        ><div>
                            <label for="phone" class="block text-gray-700">Phone</label>
                            <input type="text" id="phone" name="phone" class="w-full border border-gray-300 rounded p-2" />
                        </div>
                        <div>
                            <div>
                                <input type="checkbox" name="features" value="Air Conditioning" />
                                <label class="text-gray-700">Air Conditioning</label>
                            </div>
                            <div>
                                <input type="checkbox" name="features" value="Power Windows" />
                                <label class="text-gray-700">Power Windows</label>
                            </div>
                            <div>
                                <input type="checkbox" name="features" value="Leather Seats" />
                                <label class="text-gray-700">Leather Seats</label>
                            </div>
                            <div>
                                <input type="checkbox" name="features" value="Navigation System" />
                                <label class="text-gray-700">Navigation System</label>
                            </div>
                            <div>
                                <input type="checkbox" name="features" value="Bluetooth" />
                                <label class="text-gray-700">Bluetooth</label>
                            </div>
                            <div>
                                <input type="checkbox" name="features" value="Backup Camera" />
                                <label class="text-gray-700">Backup Camera</label>
                            </div>
                        </div>
                        <div>
                            <div>
                                <input type="checkbox" name="features" value="Air Conditioning" />
                                <label class="text-gray-700">Air Conditioning</label>
                            </div>
                            <div>
                                <input type="checkbox" name="features" value="Power Windows" />
                                <label class="text-gray-700">Power Windows</label>
                            </div>
                            <div>
                                <input type="checkbox" name="features" value="Leather Seats" />
                                <label class="text-gray-700">Leather Seats</label>
                            </div>
                            <div>
                                <input type="checkbox" name="features" value="Navigation System" />
                                <label class="text-gray-700">Navigation System</label>
                            </div>
                            <div>
                                <input type="checkbox" name="features" value="Bluetooth" />
                                <label class="text-gray-700">Bluetooth</label>
                            </div>
                            <div>
                                <input type="checkbox" name="features" value="Backup Camera" />
                                <label class="text-gray-700">Backup Camera</label>
                            </div>
                        </div>
                    </div>
                    <div class="grid grid-cols-1 gap-4 mt-4">
                        <label for="description" class="block text-gray-700">Detailed description</label>
                        <textarea name="description" id="description" class="min-w-full min-h-52 border border-gray-300 rounded p-2"></textarea>
                        <div>
                            <input type="checkbox" name="published" value="Published" />
                            <label class="text-gray-700">Published</label>
                        </div>
                    </div>
                </div>
                <div class="basis-1/4">
                    <div class="relative bg-purple-300 rounded m-4 w-full h-52">
                        <i class="fa-solid fa-camera text-6xl text-white absolute top-1/2 left-1/2 transform -translate-x-1/2 -translate-y-1/2"></i>
                        <input type="file" name="image" id="image" class="absolute top-0 left-0 w-full h-full opacity-0 cursor-pointer" />
                    </div>
                </div>
            </div>
            <div class="grid grid-cols-5 gri gap-4">
                <x-button type="reset" color="tertiary" class="col-start-4">Reset</x-button>
                <x-button type="reset">Submit</x-button>
            </div>
        </form>
    </div>
</x-app-layout>
