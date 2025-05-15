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
                @for($i = 1; $i < 10; $i++)
                    <tr class="py-2 border-b border-gray-300 hover:bg-purple-200 rounded transition duration-300">
                        <td class="py-2 px-2">
                            <img src="https://di-uploads-pod15.dealerinspire.com/lakeforestsportscars/uploads/2020/12/Ferrari-F8-Tributo-Front.jpg" alt="" class="w-28 h-28 object-fit rounded">
                        </td>
                        <td>Ferrari F8 Tributo</td>
                        <td>Sunday, 12 Dec 2022</td>
                        <td>Yes</td>
                        <td class="text-center">
                            <div class="flex gap-2 justify-center items-center">
                                <a href="{{ route('car.show', ['car' => $i]) }}"
                                   class="rounded p-2 bg-purple-600 text-white hover:bg-purple-700 transition">
                                    <i class="fa-solid fa-eye"></i>
                                </a>

                                <a href="{{ route('car.edit', ['car' => $i]) }}"
                                   class="rounded p-2 bg-yellow-500 text-white hover:bg-yellow-600 transition">
                                    <i class="fa-solid fa-pen"></i>
                                </a>

                                <form action="{{ route('car.destroy', ['car' => $i]) }}" method="POST">
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
                @endfor
            </tbody>
        </table>
    </div>
</x-app-layout>
