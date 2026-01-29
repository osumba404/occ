<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>{{ config('app.name', 'OCC') }}</title>
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=instrument-sans:400,500,600" rel="stylesheet" />
        
        <script src="https://cdn.tailwindcss.com"></script>
        <script>
            tailwind.config = {
                theme: {
                    extend: {
                        fontFamily: {
                            sans: ['Instrument Sans', 'ui-sans-serif', 'system-ui', 'sans-serif', 'Apple Color Emoji', 'Segoe UI Emoji', 'Segoe UI Symbol', 'Noto Color Emoji'],
                        },
                    },
                },
            }
        </script>
    </head>
    <body class="bg-gray-50 text-[#1b1b18] min-h-screen flex flex-col font-sans antialiased">
        
        <!-- Navigation Bar -->
        <nav class="bg-white border-b border-gray-200">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                <div class="flex justify-between h-16">
                    <div class="flex">
                        <div class="shrink-0 flex items-center">
                            <!-- Logo / Brand Name -->
                            <a href="{{ url('/') }}" class="text-2xl font-bold text-orange-600 tracking-tight flex items-center gap-2">
                                <span class="text-blue-900">ODM</span> Comrades Chapter
                            </a>
                        </div>
                    </div>
                    <div class="flex items-center space-x-4">
                        <a href="#about" class="text-sm font-medium text-gray-700 hover:text-orange-600 hidden md:block">About Us</a>
                        @if (Route::has('login'))
                            @auth
                                <a href="{{ url('/dashboard') }}" class="text-sm font-medium text-gray-700 hover:text-orange-600">Dashboard</a>
                            @else
                                <a href="{{ route('login') }}" class="text-sm font-medium text-gray-700 hover:text-orange-600">Log in</a>

                                @if (Route::has('register'))
                                    <a href="{{ route('register') }}" class="inline-flex items-center px-4 py-2 border border-transparent text-sm font-medium rounded-md shadow-sm text-white bg-orange-600 hover:bg-orange-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-orange-500">
                                        Register
                                    </a>
                                @endif
                            @endauth
                        @endif
                    </div>
                </div>
            </div>
        </nav>

        <!-- Hero / Description Section -->
        <main class="flex-grow flex items-center justify-center bg-gradient-to-br from-orange-50 to-blue-50">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-12 lg:py-24 text-center">
                <h1 class="text-4xl tracking-tight font-extrabold text-gray-900 sm:text-5xl md:text-6xl mb-6">
                    <span class="block">Welcome to</span>
                    <span class="block text-orange-600">ODM Comrades Chapter</span>
                </h1>
                <p class="mt-3 max-w-md mx-auto text-base text-gray-600 sm:text-lg md:mt-5 md:text-xl md:max-w-3xl">
                   Empowering the youth and comrades through the Orange Democratic Movement. Join the movement to champion for reputable leadership, inclusivity, and progressive change in our institutions and communities.
                </p>
                
                @if (Route::has('register') && !Auth::check())
                <div class="mt-8 max-w-md mx-auto sm:flex sm:justify-center gap-4">
                    <div class="rounded-md shadow">
                        <a href="{{ route('register') }}" class="w-full flex items-center justify-center px-8 py-3 border border-transparent text-base font-medium rounded-md text-white bg-orange-600 hover:bg-orange-700 md:py-4 md:text-lg md:px-10 transition duration-150 ease-in-out">
                            Join the Movement
                        </a>
                    </div>
                    <div class="mt-3 sm:mt-0 sm:ml-3">
                         <a href="{{ route('login') }}" class="w-full flex items-center justify-center px-8 py-3 border border-gray-300 text-base font-medium rounded-md text-orange-700 bg-white hover:bg-gray-50 md:py-4 md:text-lg md:px-10 transition duration-150 ease-in-out">
                            Log In
                        </a>
                    </div>
                </div>
                @endif
            </div>
        </main>

        <!-- Simple Footer -->
        <footer class="bg-white">
            <div class="max-w-7xl mx-auto py-6 px-4 overflow-hidden sm:px-6 lg:px-8">
                <p class="mt-8 text-center text-base text-gray-400">
                    &copy; {{ date('Y') }} OCC System. All rights reserved.
                </p>
            </div>
        </footer>

    </body>
</html>
