<x-layout>
    <div class="flex justify-center items-center min-h-screen">
        <div class="max-w-md w-full bg-white border border-gray-300 shadow-lg rounded-lg p-6">
            <!-- Back Button -->
            <div class="mb-4">
                <a href="{{ route('products.index') }}" class="text-blue-500 hover:text-blue-700 font-medium" style="text-decoration: none;">
                    &larr; Back to Products
                </a>
            </div>

            <h1 class="text-3xl font-bold text-gray-800 mb-4">Name: {{ $product->name }}</h1>

            <p class="text-gray-600 mb-2">Description: {{ $product->description }}</p>

            <p class="text-gray-500 mb-4">Size: {{ $product->size }}</p>
            
            <div class="flex justify-between items-center">
                <a href="{{ route('products.edit', $product->id) }}" class="text-blue-500 hover:text-blue-700 font-medium" style="text-decoration: none;">
                    Edit
                </a>

                <form action="{{ route('products.destroy', $product) }}" method="post" class="inline">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="text-red-500 hover:text-red-700 font-medium">
                        Delete
                    </button>
                </form>
            </div>
        </div>
    </div>
</x-layout>