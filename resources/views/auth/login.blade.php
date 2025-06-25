<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Login</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body class="min-h-screen flex items-center justify-center bg-gray-100">
    <div class="w-full max-w-md p-8 bg-white rounded shadow">
        <h2 class="text-2xl font-bold mb-6 text-center">Login</h2>

        @if ($errors->any())
            <div class="mb-4 text-red-600">
                <ul class="list-disc pl-5">
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <form method="POST" action="{{ route('sukses.login') }}">
            @csrf

            <div class="mb-4">
                <label for="username" class="block text-sm font-medium">Username</label>
                <input type="text" name="username" id="username" class="mt-1 w-full border px-3 py-2 rounded focus:outline-none focus:ring focus:ring-indigo-300" required>
            </div>

            <div class="mb-6">
                <label for="password" class="block text-sm font-medium">Password</label>
                <input type="password" name="password" id="password" class="mt-1 w-full border px-3 py-2 rounded focus:outline-none focus:ring focus:ring-indigo-300" required>
            </div>

            <button type="submit" class="w-full bg-indigo-600 hover:bg-indigo-700 text-white py-2 px-4 rounded">
                Login
            </button>
        </form>
    </div>
</body>
</html>
