<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

    <!-- Styles -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="font-sans antialiased">
    <div class="min-h-screen bg-gray-100 flex flex-col">
        @include('layouts.navigation') <!-- Navigation Bar -->

        <div class="flex flex-1">
            <!-- Sidebar Layout -->
            <aside class="w-64 h-screen bg-gradient-to-b from-gray-800 to-gray-900 text-white shadow-lg flex-shrink-0">
                <div class="p-4">
                    <!-- <h2 class="text-2xl font-bold text-gray-200 mb-6">Dashboard</h2> -->
                    <ul class="space-y-4">
                        <li>
                            <a href="{{ route('dashboard') }}" class="flex items-center px-4 py-2 text-lg font-semibold bg-gray-700 hover:bg-indigo-600 rounded-lg transition-colors duration-300 ease-in-out">
                                Vehicle Tax
                            </a>
                        </li>
                        <li>
                            <a href="#" class="flex items-center px-4 py-2 text-lg font-semibold bg-gray-700 hover:bg-indigo-600 rounded-lg transition-colors duration-300 ease-in-out">
                                Vehicle Permit
                            </a>
                        </li>
                        <li>
                            <a href="#" class="flex items-center px-4 py-2 text-lg font-semibold bg-gray-700 hover:bg-indigo-600 rounded-lg transition-colors duration-300 ease-in-out">
                                Fitness Certificate
                            </a>
                        </li>
                        <li>
                            <a href="#" class="flex items-center px-4 py-2 text-lg font-semibold bg-gray-700 hover:bg-indigo-600 rounded-lg transition-colors duration-300 ease-in-out">
                                Driver Licence
                            </a>
                        </li>
                    </ul>
                      
                </div>
            </aside>

            <!-- Main Content -->
            <main class="flex-1 p-10 bg-white shadow-md rounded-lg overflow-auto">
                {{ $slot }}
            </main>
        </div>
    </div>
</body>
</html>
