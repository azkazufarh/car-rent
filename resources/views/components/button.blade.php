@props(['type' => 'button', 'color' => 'primary', 'flex' => false, 'class' => ''])

<button :$type class="w-full @if ($color === 'primary') bg-purple-600 text-white hover:bg-purple-700 @elseif ($color === 'secondary') border border-purple-600 text-purple-600 hover:bg-purple-600 hover:text-white @elseif ($color === 'tertiary') border border-gray-400 text=gray-800 @endif text-lg px-8 py-2 rounded-full transition @if($flex) flex justify-center items-center gap-2 @endif {{ $class }}" >{{ $slot }}</button>
