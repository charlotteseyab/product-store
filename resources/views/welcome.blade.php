<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <style>
        .custom-bg {
            background-image: url('/image.jpg');
            background-size: fit; 
            background-position: center; 
            background-repeat: no-repeat; 
            width: 100%; 
            height: 100vh; 
        }
    </style>
</head>
<body class="bg-gray-100">

    <div class="flex items-center justify-center min-h-screen custom-bg bg-cover bg-center">
        <div class="w-full max-w-md p-6 bg-white bg-opacity-90 rounded-lg shadow-lg">
            <h1 class="text-4xl font-bold text-center text-gray-800 mb-6">Welcome to My Product Store</h1>
            <p class="text-gray-600 text-center mb-8">
                Start exploring amazing features by logging in or registering an account.
            </p>

            <div class="flex flex-col gap-4">
                <a href="{{ route('login') }}"
                   class="w-full text-center bg-blue-500 hover:bg-blue-600 text-white py-2 px-4 rounded-lg font-semibold transition duration-300">
                    Login
                </a>

                <a href="{{ route('register') }}"
                   class="w-full text-center bg-gray-100 hover:bg-gray-200 text-gray-800 py-2 px-4 rounded-lg font-semibold transition duration-300">
                    Register
                </a>
            </div>
        </div>
    </div>

</body>
</html>
