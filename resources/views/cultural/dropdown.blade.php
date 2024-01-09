<x-guest-layout>
    <div class="container mx-auto mt-8">
        <div class="flex items-center justify-center">
            <div class="relative">
                <button id="dropdownBtn"
                    class="bg-blue-500 text-white px-4 py-2 rounded focus:outline-none focus:shadow-outline-blue active:bg-blue-800">
                    Cultural Elements
                </button>

                <div class="absolute hidden bg-white mt-2 p-2 rounded shadow-lg">
                    <a href="#" class="block px-4 py-2 text-gray-800 hover:bg-blue-500 hover:text-white">History of the
                        canoe</a>
                    <a href="#"
                        class="block px-4 py-2 text-gray-800 hover:bg-blue-500 hover:text-white">Construction</a>
                    <a href="#" class="block px-4 py-2 text-gray-800 hover:bg-blue-500 hover:text-white">The Journey</a>
                    <a href="#" class="block px-4 py-2 text-gray-800 hover:bg-blue-500 hover:text-white">The dugout
                        canoe today</a>
                    <a href="#" class="block px-4 py-2 text-gray-800 hover:bg-blue-500 hover:text-white">Vocabulary</a>
                </div>
            </div>
        </div>
        <!-- Include the JavaScript file -->
        <script src="{{ asset('js/dropdown.js') }}"></script>
    </div>
</x-guest-layout>