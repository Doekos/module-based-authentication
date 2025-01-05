<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>@yield('title', config('app.name', 'Laravel'))</title>

        <!-- Styles -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    <body class="bg-gray-100 h-screen antialiased leading-none">
        <div class="flex justify-center items-center min-h-screen">
            <div class="w-full max-w-md mx-auto p-6 bg-white shadow-md rounded-lg">
                @yield('content')
            </div>
        </div>
    </body>
</html>
