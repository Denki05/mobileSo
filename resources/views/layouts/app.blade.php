<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="h-full">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>{{ config('app.name', 'UNIFRA') }}</title>

    <!-- Tailwind CSS CDN -->
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
</head>
<body class="h-full bg-gray-100 text-gray-900">

    <div class="min-h-screen flex flex-col">
        <!-- Navbar -->
        <header class="bg-white shadow p-4 flex items-center justify-between">
            <div class="text-lg font-bold">
                {{ config('app.name', 'UNIFRA') }}
            </div>
            <div>
                <form method="POST" action="{{ route('logout') }}">
                    @csrf
                    <button type="submit" class="text-sm text-red-500 hover:underline">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none"
                            viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M17 16l4-4m0 0l-4-4m4 4H7m6 4v1a3 3 0 1 1-6 0v-1m6-4H3"/>
                        </svg>
                        Logout
                    </button>
                </form>
            </div>
        </header>

        <!-- Konten -->
        <main class="flex-1 p-4 pb-24">
            {{ $slot ?? '' }}
        </main>

        <!-- Footer -->
        <footer class="bg-white shadow p-4 text-center text-xs">
            &copy; {{ date('Y') }} Dashboard Penjualan
        </footer>
    </div>

</body>
</html>