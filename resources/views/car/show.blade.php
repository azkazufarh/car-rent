<x-app-layout title="Detail Car">
    <div class="max-w-7xl mx-auto px-6 my-4">
        <div class="mb-4">
            <h1 class="text-4xl font-bold">Ferrari SF25 - 2025</h1>
            <p>Bandung, West Java - 2 days ago</p>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-4 gap-4">
            <div class="col-span-1 md:col-span-3">
                <div class="grid grid-cols-4 gap-4 mb-4">
                    <img src="https://cdn.ferrari.com/cms/network/media/img/resize/6195238ab3c7ea5975d9077d-f150bdcoverthree1300x730pg" class="col-span-3 w-full rounded-lg shadow-lg" alt="Ferrari SF25">
                    <div class="col-span-1">
                        <img src="https://cdn.ferrari.com/cms/network/media/img/resize/6195238ab3c7ea5975d9077d-f150bdcoverthree1300x730pg" class="w-full rounded-lg shadow-lg" alt="Ferrari SF25">
                    </div>
                </div>

                <div class="bg-white p-4 rounded-lg shadow-lg">
                    <h2 class="text-2xl font-bold text-gray-800">Description</h2>
                    <p class="text-gray-600 mt-2">The Ferrari SF25 is a high-performance sports car that combines cutting-edge technology with stunning design. With its powerful hybrid engine and aerodynamic body, it delivers an exhilarating driving experience.</p>

                    <h2 class="text-2xl font-bold text-gray-800 mt-8">Car Specification</h2>
                    <p class="mt-2 text-gray-700"><i class="fa-solid fa-circle-check text-green-400 me-2"></i> Air Conditioning</p>
                    <p class="mt-2 text-gray-700"><i class="fa-solid fa-circle-check text-green-400 me-2"></i> Air Conditioning</p>
                    <p class="mt-2 text-gray-700"><i class="fa-solid fa-circle-check text-green-400 me-2"></i> Air Conditioning</p>
                    <p class="mt-2 text-gray-700"><i class="fa-solid fa-circle-check text-green-400 me-2"></i> Air Conditioning</p>
                </div>
            </div>
            <div>
                <div class="bg-white p-4 m-2 rounded-lg shadow-lg">
                    <div class="flex justify-between items-center border-b border-gray-300 pb-2">
                        <p class="text-2xl font-bold text-gray-800">Rp 350.000/day</p>
                        <i class="fa-regular fa-heart"></i>
                    </div>
                    <table class="w-full table-auto my-2 pb-2 borber-b border-gray-300">
                        <tbody>
                            <tr>
                                <td class="py-1">Maker</td>
                                <td class="py-1">Ferrari</td>
                            </tr>
                            <tr>
                                <td class="py-1">Model</td>
                                <td class="py-1">SF25</td>
                            </tr>
                            <tr>
                                <td class="py-1">Year</td>
                                <td class="py-1">2025</td>
                            </tr>
                            <tr>
                                <td class="py-1">Car Type</td>
                                <td class="py-1">Sports</td>
                            </tr>
                            <tr>
                                <td class="py-1">Fuel Type</td>
                                <td class="py-1">Hybrid</td>
                            </tr>
                        </tbody>
                    </table>
                    <div class="flex items-center gap-4 my-2">
                        <img src="https://thumbs.dreamstime.com/b/portrait-beautiful-happy-woman-white-teeth-smiling-beauty-attractive-healthy-girl-perfect-smile-blonde-hair-fresh-face-76137815.jpg"  class="w-14 h-14 rounded-full object-cover object-center">
                        <div>
                            <p class="text-gray-800 font-bold">John Doe</p>
                            <p class="text-gray-500">Owner</p>
                        </div>
                    </div>

                    <div class="grid grid-cols-1 gap-2">
                        <x-button color="primary">Rent Now</x-button>
                        <x-button color="secondary">Add to Wishlist</x-button>
                        <x-button color="tertiary" flex=true><i class="fa-brands fa-whatsapp"></i>+6282212341235</x-button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
