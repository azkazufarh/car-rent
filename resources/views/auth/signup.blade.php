<x-auth-layout title="Sign Up">
    <h2 class="text-3xl text-center font-bold text-purple-600">Sign Up</h2>
    <form action="" class="w-1/2 mx-auto" >
        <div class="mb-2">
            <label for="fullname" class="block text-gray-700">Full Name</label>
            <input type="text" id="fullname" name="fullname" class="w-full border border-gray-300 rounded-lg p-2 mt-2" required>
        </div>
        <div class="mb-2">
            <label for="email" class="block text-gray-700">Email</label>
            <input type="email" id="email" name="email" class="w-full border border-gray-300 rounded-lg p-2 mt-2" required>
        </div>
        <div class="mb-2">
            <label for="phone" class="block text-gray-700">Phone Number</label>
            <input type="text" id="phone" name="phone" class="w-full border border-gray-300 rounded-lg p-2 mt-2" required>
        </div>
        <div class="mb-2">
            <label for="password" class="block text-gray-700">Password</label>
            <input type="password" id="password" name="password" class="w-full border border-gray-300 rounded-lg p-2 mt-2" required>
        </div>
        <div class="mb-2">
            <label for="verifyPassword" class="block text-gray-700">Verify Password</label>
            <input type="password" id="verifyPassword" name="verifyPassword" class="w-full border border-gray-300 rounded-lg p-2 mt-2" required>
        </div>
        <button type="submit" class="w-full bg-purple-600 text-white text-lg px-8 py-2 rounded-full hover:bg-purple-700 transition">Sign Up</button>
    </form>
</x-auth-layout>