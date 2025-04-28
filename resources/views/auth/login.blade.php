<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>

    <!-- Tailwind CSS CDN -->
    <script src="https://cdn.tailwindcss.com"></script>

    <!-- Optional: Custom konfigurasi Tailwind -->
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        primary: '#4f46e5', // indigo-600
                    }
                }
            }
        }
    </script>
</head>
<body class="bg-gray-100 flex items-center justify-center min-h-screen px-4">

    <div class="w-full max-w-sm bg-white rounded-2xl shadow-md p-6">
        <!-- Logo -->
        <div class="flex justify-center mb-6">
            <img src="{{ asset('logo_ppi.png') }}" alt="Logo" class="w-16 h-16 object-contain">
        </div>

        <!-- Title -->
        <h1 class="text-xl font-bold text-center text-gray-800 mb-4">Login ke Akun Anda</h1>

        <!-- Session Status -->
        @if (session('status'))
            <div class="mb-4 text-sm text-green-600 text-center">
                {{ session('status') }}
            </div>
        @endif

        <!-- Validation Errors -->
        @if ($errors->any())
            <div class="mb-4 text-sm text-red-600">
                <ul class="list-disc pl-4">
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <!-- Form -->
        <form method="POST" action="{{ route('login') }}">
            @csrf

            <!-- Email -->
            <div class="mb-4">
                <label for="email" class="block text-sm font-medium text-gray-700 mb-1">Email</label>
                <input id="email" name="email" type="email" value="{{ old('email') }}" required autofocus
                    class="w-full px-4 py-2 border rounded-lg focus:ring-2 focus:ring-primary focus:outline-none text-sm" />
            </div>

            <!-- Password -->
            <div class="mb-4">
                <label for="password" class="block text-sm font-medium text-gray-700 mb-1">Password</label>
                <input id="password" name="password" type="password" required
                    class="w-full px-4 py-2 border rounded-lg focus:ring-2 focus:ring-primary focus:outline-none text-sm" />
            </div>

            <!-- Tombol Login -->
            <button type="submit"
                class="w-full bg-primary text-white py-2 rounded-lg hover:bg-indigo-700 transition text-sm font-semibold">
                Masuk
            </button>
        </form>
    </div>

</body>
</html>