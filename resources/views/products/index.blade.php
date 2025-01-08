<x-layout>
    <!-- Navbar -->
    <nav class="bg-white shadow-md">
        <div class="w-full mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex justify-between h-16">
                <div class="flex">
                    <div class="hidden md:flex md:ml-6 md:space-x-8">
                        <a href="{{ route('dashboard') }}" class="text-blue-700 hover:text-blue-500 px-3 py-2 rounded-md text-sm font-bold flex flex-shrink-0 items-center text-xl" style="text-decoration: none;">Back to Dashboard</a>
                        <!-- Add more links here if needed -->
                    </div>
                </div>
            </div>
        </div>
    </nav>

    <!-- Main Content -->
    <div class="max-w-4xl mx-auto py-8">
        <div class="flex justify-start mb-4">
            <a href="{{ route('products.create') }}" class="bg-blue-500 text-white font-bold py-2 px-4 rounded-md hover:bg-blue-600 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-opacity-50" style="text-decoration: none;">
                New Product
            </a>
        </div>

        <div class="space-y-6">
            @foreach ($products as $product)
                <div class="bg-white border-2 border-gray-400 shadow-lg rounded-lg p-6">
                    <h2 class="text-2xl font-semibold text-gray-700">
                        <a href="{{ route('products.show', $product) }}" class="hover:text-blue-500" style="text-decoration: none;">
                            Name: {{ $product->name }}
                        </a>
                    </h2>
                    <p class="text-gray-600 mt-2">Description: {{ $product->description }}</p>
                    <p class="text-gray-500 mt-1">Size: {{ $product->size }}</p>
                </div>
            @endforeach
        </div>

        <div class="mt-8">
            {{ $products->links('vendor/pagination/simple-default') }}
        </div>
    </div>
</x-layout>