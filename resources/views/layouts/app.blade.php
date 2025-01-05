<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>@yield('title', 'Laravel App')</title>

        <!-- Styles -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    <body class="bg-gray-100 font-sans leading-normal tracking-normal">

        <!-- Navigation Bar -->
        <nav class="bg-blue-500 text-white shadow">
            <div class="container mx-auto px-4 py-4 flex justify-between items-center">
                <a href="{{ route('core.dashboard') }}" class="text-lg font-bold">PixelPanicLabs</a>
                <ul class="flex space-x-4">
                    <li><a href="{{ route('core.dashboard') }}" class="hover:text-gray-200">Dashboard</a></li>
                    <li><a href="#" class="hover:text-gray-200">Profile</a></li>
                    <li>
                        <form method="POST" action="{{ route('logout') }}">
                            @csrf
                            <button type="submit" class="hover:text-gray-200">Logout</button>
                        </form>
                    </li>
                </ul>
            </div>
        </nav>

        <!-- Main Content -->
        <main class="container mx-auto px-4 py-8">
            @yield('content') {{-- Page-specific content --}}
        </main>

        <!-- Footer -->
        <footer class="bg-gray-800 text-white text-center py-4 mt-8">
            <p>&copy; {{ date('Y') }} PixelPanicLabs All rights reserved.</p>
        </footer>

        <!-- Add your JS files -->
        <script src="https://cdn.jsdelivr.net/npm/alpinejs@2.8.2/dist/alpine.min.js" defer></script>
        @stack('scripts') {{-- For page-specific scripts --}}
    </body>
</html>
