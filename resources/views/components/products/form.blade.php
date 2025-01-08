<div class="flex min-h-screen">
    <!-- Sidebar -->
    <nav class="bg-white shadow-md w-60 flex-shrink-0">
        <div class="h-full px-4 py-6">
            <div class="flex flex-col space-y-4">
                <a href="{{ route('products.index') }}" class="text-xl font-bold text-blue-500 text-decoration-none">
                    Home
                </a>
                <h2 href="{{ route('products.create') }}" class="text-gray-700 hover:text-blue-500 px-3 py-2 rounded-md text-sm font-medium">
                    New Product
                </h2>
            </div>
        </div>
    </nav>

    <!-- Main Content -->
    <div class="flex-grow flex justify-center items-center h-full">
        <div class="max-w-lg w-full bg-white border border-gray-400 p-8 shadow-xl rounded-lg overflow-hidden">
            <form class="p-8">
                @csrf
                <h2 class="text-2xl font-bold text-center text-gray-800 mb-6" style="font-family: 'Cursive', sans-serif;">Product Details</h2>
                
                <div class="mb-5">
                    <label for="name" class="block text-gray-700 font-semibold mb-2">Name</label>
                    <input type="text" name="name" id="name" value="{{ old('name', $product->name ?? '') }}" class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500 transition duration-200 bg-gray-300 text-black">
                </div>

                <div class="mb-5">
                    <label for="description" class="block text-gray-700 font-semibold mb-2">Description</label>
                    <textarea name="description" id="description" class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500 transition duration-200 bg-gray-300 text-black">{{ old('description', $product->description ?? '') }}</textarea>
                </div>

                <div class="mb-5">
                    <label for="size" class="block text-gray-700 font-semibold mb-2">Size</label>
                    <input type="text" name="size" id="size" value="{{ old('size', $product->size ?? '') }}" class="w-full px-4 py-3 border border-gray-500 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500 transition duration-200 bg-gray-300 text-black">
                </div>

                <div class="flex justify-center">
                    <button type="submit" class="bg-blue-600 text-white font-bold py-3 px-6 rounded-lg hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-opacity-50 transition duration-200">
                        Save
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>