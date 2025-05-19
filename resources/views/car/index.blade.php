<x-app-layout title="My Cars">
    <div class="max-w-7xl mx-auto px-6 my-4">
        <h1 class="text-4xl font-bold">My Cars</h1>

        <table class="w-full mt-4 table-auto">
            <thead class="bg-purple-600  text-white font-bold text-center">
                <tr>
                    <th class="py-4 rounded-tl-lg">Image</th>
                    <th>Title</th>
                    <th>Date</th>
                    <th>Published</th>
                    <th class="rounded-tr-lg">Action</th>
                </tr>
            </thead>
            <tbody>
                @forelse($cars as $car)
                    <tr class="py-2 border-b border-gray-300 hover:bg-purple-200 rounded transition duration-300">
                        <td class="py-2 px-2">
                            <img src="{{ $car->primaryImages->image_path }}" alt="" class="w-28 h-28 object-fit rounded">
                        </td>
                        <td>{{ $car->maker->name }} {{ $car->model->name }} </td>
                        <td>{{ new \Carbon\Carbon($car->published_at)->format('d M Y') }}</td>
                        <td>@if($car->published_at != null) Yes @else No @endif</td>
                        <td class="text-center">
                            <div class="flex gap-2 justify-center items-center">
                                <a href="{{ route('car.show', ['car' => $car->id]) }}"
                                   class="rounded p-2 bg-purple-600 text-white hover:bg-purple-700 transition">
                                    <i class="fa-solid fa-eye"></i>
                                </a>

                                <a href="{{ route('car.edit', ['car' => $car->id]) }}"
                                   class="rounded p-2 bg-yellow-500 text-white hover:bg-yellow-600 transition">
                                    <i class="fa-solid fa-pen"></i>
                                </a>

                                <form action="{{ route('car.destroy', ['car' => $car->id]) }}" method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit"
                                            class="rounded p-2 bg-red-600 text-white hover:bg-red-700 transition">
                                        <i class="fa-solid fa-trash"></i>
                                    </button>
                                </form>
                            </div>
                        </td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="5" class="text-center py-4">
                            <p class="text-gray-500">No cars found.</p>
                        </td>
                    </tr>
                @endforelse
            </tbody>
        </table>
    </div>
</x-app-layout>
