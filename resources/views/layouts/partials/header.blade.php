<header class="bg-white border-b border-gray-300 ">
    <div class="max-w-7xl mx-auto md:flex md:justify-between items-center py-6 px-4">
        <a href="{{ route('home') }}" class="text-2xl text-purple-600 font-black">CarRent</a>
        <div class="hidden md:flex gap-4">
            <a href="{{ route('car.create') }}" class="bg-purple-600 text-white text-lg px-8 py-2 rounded-full hover:bg-purple-700 transition">Add Car</a>
            <a href="{{ route('signin') }}" class="bg-purple-600 text-white text-lg px-8 py-2 rounded-full hover:bg-purple-700 transition">Sign In</a>
            <a href="{{ route('signup') }}" class="border border-purple-600 text-purple-600 hover:bg-purple-600 hover:text-white text-lg px-8 py-2 rounded-full transition">Sign Up</a>
        </div>
    </div>
</header>
