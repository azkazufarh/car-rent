<x-app-layout title="Search Car">
    <div class="max-w-7xl mx-auto px-6 my-4">
        <div class="flex items-center justify-between mb-8">
            <h1 class="text-4xl font-bold">Find your favorite car</h1>

            <select name="order" id="order" class="w-1/5 border border-gray-300 rounded p-2">
                <option value="">Order By</option>
                <option value="Ford">Ford</option>
                <option value="Toyota">Toyota</option>
            </select>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-3 gap-4">
            <div class="col-span-1">
                <div class="bg-white p-4 m-2 rounded-lg shadow-lg mb-4">
                    <p class="text-gray-600">Found <b>4,568</b> cars</p>
                </div>

                <form action="{{ route('car.search') }}" method="GET" class="bg-white p-4 m-2 rounded-lg shadow-lg mb-4">
                    <div class="mb-4">
                        <label for="maker" class="block text-gray-700 mb-2">Maker</label>
                        <select name="maker" id="maker" class="block w-full border border-gray-300 rounded p-2">
                            <option value="">Maker</option>
                            <option value="Ford">Ford</option>
                            <option value="Toyota">Toyota</option>
                        </select>
                    </div>
                    <div class="mb-4">
                        <label for="model" class="block text-gray-700 mb-2">Model</label>
                        <select name="model" id="model" class="block w-full border border-gray-300 rounded p-2">
                            <option value="">Model</option>
                            <option value="Ford">Ford</option>
                            <option value="Toyota">Toyota</option>
                        </select>
                    </div>
                    <div class="mb-4">
                        <label for="type" class="block text-gray-700 mb-2">Type</label>
                        <select name="type" id="type" class="block w-full border border-gray-300 rounded p-2">
                            <option value="">Type</option>
                            <option value="Ford">Ford</option>
                            <option value="Toyota">Toyota</option>
                        </select>
                    </div>
                    <div class="mb-4">
                        <label for="year" class="block text-gray-700 mb-2">Year</label>
                        <div class="grid grid-cols-2">
                            <input type="number" name="year_start" id="year_start" placeholder="Start Year" class="border border-gray-300 rounded p-2 mr-2">
                            <input type="number" name="year_end" id="year_end" placeholder="End Year" class="border border-gray-300 rounded p-2">
                        </div>
                    </div>
                    <div class="mb-4">
                        <label for="price" class="block text-gray-700 mb-2">Price</label>
                        <div class="grid grid-cols-2">
                            <input type="number" name="price_start" id="price_start" placeholder="Low price" class="border border-gray-300 rounded p-2 mr-2">
                            <input type="number" name="price_end" id="price_end" placeholder="High price" class="border border-gray-300 rounded p-2">
                        </div>
                    </div>
                    <div class="mb-4">
                        <label for="mileage" class="block text-gray-700 mb-2">Mileage</label>
                        <select name="mileage" id="mileage" class="block w-full border border-gray-300 rounded p-2">
                            <option value="">Mileage</option>
                            <option value="Ford">Ford</option>
                            <option value="Toyota">Toyota</option>
                        </select>
                    </div>
                    <div class="mb-4">
                        <label for="state" class="block text-gray-700 mb-2">state</label>
                        <select name="state" id="state" class="block w-full border border-gray-300 rounded p-2">
                            <option value="">state</option>
                            <option value="Ford">Ford</option>
                            <option value="Toyota">Toyota</option>
                        </select>
                    </div>
                    <div class="mb-4">
                        <label for="city" class="block text-gray-700 mb-2">city</label>
                        <select name="city" id="city" class="block w-full border border-gray-300 rounded p-2">
                            <option value="">city</option>
                            <option value="Ford">Ford</option>
                            <option value="Toyota">Toyota</option>
                        </select>
                    </div>
                    <div class="mb-4">
                        <label for="fuel_type" class="block text-gray-700 mb-2">Fuel Type</label>
                        <select name="fuel_type" id="fuel_type" class="block w-full border border-gray-300 rounded p-2">
                            <option value="">Fuel Type</option>
                            <option value="Ford">Ford</option>
                            <option value="Toyota">Toyota</option>
                        </select>
                    </div>
                    <div class="mb-4 grid grid-cols-2 gap-2">
                        <x-button color="tertiary">Reset</x-button>
                        <x-button color="primary">Search</x-button>
                    </div>
                </form>
            </div>

            <div class="col-span-2">
                <div class="grid grid-cols-2 gap-4">
                    @for ($i = 0; $i < 6; $i++)
                        <x-card />
                    @endfor
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
