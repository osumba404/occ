<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
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
        <nav class="bg-white border-b border-gray-200 sticky top-0 z-50">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                <div class="flex justify-between h-16">
                    <div class="flex flex-1 items-center min-w-0">
                        <!-- Logo / Brand Name -->
                        <a href="{{ url('/') }}" class="text-lg sm:text-2xl font-bold text-orange-600 tracking-tight flex items-center gap-2 sm:gap-3">
                            <img src="{{ asset('images/logo.jpeg') }}" alt="ODM Logo" class="h-8 w-8 sm:h-10 sm:w-10 object-contain flex-shrink-0">
                            <span class="text-blue-900 hidden sm:inline">ODM</span> 
                            <span class="text-blue-900">Comrades</span>
                        </a>
                    </div>
                    <!-- Desktop Navigation -->
                    <div class="hidden md:flex items-center space-x-4">
                        <a href="#leadership" class="text-sm font-medium text-gray-700 hover:text-orange-600">Leadership</a>
                        <a href="#celebrations" class="text-sm font-medium text-gray-700 hover:text-orange-600">Celebrations</a>
                        <a href="#campus" class="text-sm font-medium text-gray-700 hover:text-orange-600">Campus</a>
                        <a href="#youth" class="text-sm font-medium text-gray-700 hover:text-orange-600">Youth</a>
                        @if (Route::has('register'))
                            @auth
                                <a href="{{ url('/dashboard') }}" class="text-sm font-medium text-gray-700 hover:text-orange-600">Dashboard</a>
                            @else
                                <a href="{{ route('login') }}" class="text-sm font-medium text-gray-700 hover:text-orange-600">Log in</a>

                                @if (Route::has('membership'))
                                    <a href="{{ route('membership') }}" class="inline-flex items-center px-4 py-2 border border-transparent text-sm font-medium rounded-md shadow-sm text-white hover:bg-orange-600 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-orange-500" style="background-color: #fb923c;">
                                        Register
                                    </a>
                                @endif
                            @endauth
                        @endif
                    </div>
                    <!-- Mobile menu button -->
                    <div class="md:hidden flex items-center">
                        <button id="mobile-menu-button" class="inline-flex items-center justify-center p-2 rounded-md text-gray-400 hover:text-gray-500 hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-inset focus:ring-orange-500">
                            <svg class="h-6 w-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"></path>
                            </svg>
                        </button>
                    </div>
                </div>
            </div>
            
            <!-- Mobile menu -->
            <div id="mobile-menu" class="hidden md:hidden bg-white border-t border-gray-200">
                <div class="px-2 pt-2 pb-3 space-y-1">
                    <a href="#leadership" class="block px-3 py-2 text-base font-medium text-gray-700 hover:text-orange-600 hover:bg-gray-50 rounded-md">Leadership</a>
                    <a href="#celebrations" class="block px-3 py-2 text-base font-medium text-gray-700 hover:text-orange-600 hover:bg-gray-50 rounded-md">Celebrations</a>
                    <a href="#campus" class="block px-3 py-2 text-base font-medium text-gray-700 hover:text-orange-600 hover:bg-gray-50 rounded-md">Campus</a>
                    <a href="#youth" class="block px-3 py-2 text-base font-medium text-gray-700 hover:text-orange-600 hover:bg-gray-50 rounded-md">Youth</a>
                    @if (Route::has('register'))
                        @auth
                            <a href="{{ url('/dashboard') }}" class="block px-3 py-2 text-base font-medium text-gray-700 hover:text-orange-600 hover:bg-gray-50 rounded-md">Dashboard</a>
                        @else
                            <a href="{{ route('login') }}" class="block px-3 py-2 text-base font-medium text-gray-700 hover:text-orange-600 hover:bg-gray-50 rounded-md">Log in</a>

                            @if (Route::has('membership'))
                                <a href="{{ route('membership') }}" class="block px-3 py-2 text-base font-medium text-white hover:bg-orange-700 rounded-md" style="background-color: #fb923c;">
                                    Register
                                </a>
                            @endif
                        @endif
                    @endif
                </div>
            </div>
        </nav>

        <!-- Hero / Description Section -->
        <main class="flex-grow">
            <!-- Hero Section -->
            <section class="relative flex items-center justify-center min-h-screen overflow-hidden">
                <!-- Animated Background Slideshow -->
                <div class="absolute inset-0 z-0">
                    <div class="slideshow-container absolute inset-0 overflow-hidden">
                        <div class="slide absolute inset-0 bg-cover bg-center bg-no-repeat" style="background-image: url('{{ asset('images/Raila2.webp') }}'); filter: brightness(1.1) contrast(1.1) saturate(1.2); opacity: 1; transition: opacity 4s ease-in-out;"></div>
                        <div class="slide absolute inset-0 bg-cover bg-center bg-no-repeat" style="background-image: url('{{ asset('images/Raila3.webp') }}'); filter: brightness(1.1) contrast(1.1) saturate(1.2); opacity: 0; transition: opacity 4s ease-in-out;"></div>
                        <div class="slide absolute inset-0 bg-cover bg-center bg-no-repeat" style="background-image: url('{{ asset('images/Raila4.webp') }}'); filter: brightness(1.1) contrast(1.1) saturate(1.2); opacity: 0; transition: opacity 4s ease-in-out;"></div>
                    </div>
                    <!-- Lighter Overlay for text readability while keeping faces visible -->
                    <div class="absolute inset-0 bg-gradient-to-br from-black/70 via-black/60 to-blue-900/60"></div>
                </div>
                
                <!-- Hero Content -->
                <div class="relative z-10 max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-8 sm:py-12 lg:py-24 text-center">
                    <h1 class="text-3xl sm:text-4xl tracking-tight font-extrabold md:text-5xl lg:text-6xl mb-4 sm:mb-6">
                        <span class="block text-white" style="text-shadow: 2px 2px 4px rgba(0,0,0,0.8);">Welcome to</span>
                        <span class="block text-orange-500" style="text-shadow: 2px 2px 4px rgba(0,0,0,0.8);">ODM Comrades Chapter</span>
                    </h1>
                    <p class="mt-3 max-w-xs sm:max-w-md mx-auto text-sm sm:text-base md:text-lg lg:text-xl md:max-w-2xl lg:max-w-3xl text-white" style="text-shadow: 1px 1px 2px rgba(0,0,0,0.8);">
                       Empowering the youth and comrades through the Orange Democratic Movement. Join the movement to champion for reputable leadership, inclusivity, and progressive change.
                    </p>
                    
                    @if (Route::has('membership'))
                    <div class="mt-6 sm:mt-8 max-w-md mx-auto sm:flex sm:justify-center gap-2 sm:gap-4">
                        <div class="rounded-md shadow-lg flex-1 sm:flex-none">
                            <a href="{{ route('membership') }}" class="w-full flex items-center justify-center px-4 sm:px-6 lg:px-8 py-3 border border-transparent text-sm sm:text-base font-medium rounded-md text-white hover:bg-orange-600 transition duration-150 ease-in-out" style="background-color: #fb923c;">
                                Join the Movement
                            </a>
                        </div>
                        <div class="mt-3 sm:mt-0 sm:ml-3 flex-1 sm:flex-none">
                             <a href="{{ route('login') }}" class="w-full flex items-center justify-center px-4 sm:px-6 lg:px-8 py-3 border border-transparent text-sm sm:text-base font-medium rounded-md text-white hover:bg-blue-700 transition duration-150 ease-in-out" style="background-color: #1e40af;">
                                Log In
                            </a>
                        </div>
                    </div>
                    @endif
                </div>
            </section>

            <!-- Leadership Section -->
            <section id="leadership" class="py-16 bg-gradient-to-br from-gray-50 via-blue-50 to-orange-50">
                <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                    <h2 class="text-3xl font-bold text-center text-blue-900 mb-12">Our Leadership</h2>
                    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8">
                        <div class="text-center bg-white rounded-lg p-6 shadow-lg hover:shadow-xl transition-shadow duration-300">
                            <img src="{{ asset('images/Raila Amolo Odinga- Party leader.jpeg') }}" alt="Party Leader" class="w-32 h-32 rounded-full mx-auto mb-4 object-cover shadow-lg border-4 border-orange-500">
                            <h3 class="font-semibold text-blue-900">Raila Amolo Odinga</h3>
                            <p class="text-sm text-orange-600 font-medium">Party Leader</p>
                        </div>
                        <div class="text-center bg-white rounded-lg p-6 shadow-lg hover:shadow-xl transition-shadow duration-300">
                            <img src="{{ asset('images/Hon. Oduor Ongwen- Executive Director ODM party.jpeg') }}" alt="Executive Director" class="w-32 h-32 rounded-full mx-auto mb-4 object-cover shadow-lg border-4 border-blue-500">
                            <h3 class="font-semibold text-blue-900">Hon. Oduor Ongwen</h3>
                            <p class="text-sm text-orange-600 font-medium">Executive Director</p>
                        </div>
                        <div class="text-center bg-white rounded-lg p-6 shadow-lg hover:shadow-xl transition-shadow duration-300">
                            <img src="{{ asset('images/ODM_Comrades_Chapter_National_Chairperson_Gerald_Ogalo.jpeg') }}" alt="National Chairperson" class="w-32 h-32 rounded-full mx-auto mb-4 object-cover shadow-lg border-4 border-orange-500">
                            <h3 class="font-semibold text-blue-900">Gerald Ogalo</h3>
                            <p class="text-sm text-orange-600 font-medium">National Chairperson</p>
                        </div>
                        <div class="text-center bg-white rounded-lg p-6 shadow-lg hover:shadow-xl transition-shadow duration-300">
                            <img src="{{ asset('images/Hannington_Oguk_Secretary_General_ODM_Comrades_Chapter.jpeg') }}" alt="Secretary General" class="w-32 h-32 rounded-full mx-auto mb-4 object-cover shadow-lg border-4 border-blue-500">
                            <h3 class="font-semibold text-blue-900">Hannington Oguk</h3>
                            <p class="text-sm text-orange-600 font-medium">Secretary General</p>
                        </div>
                    </div>
                </div>
            </section>

            <!-- Celebrations Gallery Section -->
            <section id="celebrations" class="py-16 bg-gray-50">
                <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                    <h2 class="text-3xl font-bold text-center text-gray-900 mb-4">ODM 20th Celebrations - Mombasa</h2>
                    <p class="text-center text-gray-600 mb-8">Celebrating two decades of democratic leadership and service to Kenyans</p>
                    
                    <!-- Filter Buttons -->
                    <div class="flex justify-center mb-8 space-x-4">
                        <button class="filter-btn px-6 py-2 rounded-full bg-orange-500 text-white font-medium transition-colors duration-300" data-filter="all">All Photos</button>
                        <button class="filter-btn px-6 py-2 rounded-full bg-gray-200 text-gray-700 font-medium hover:bg-gray-300 transition-colors duration-300" data-filter="celebrations">Celebrations</button>
                        <button class="filter-btn px-6 py-2 rounded-full bg-gray-200 text-gray-700 font-medium hover:bg-gray-300 transition-colors duration-300" data-filter="leadership">Leadership</button>
                    </div>
                    
                    <!-- Modern Masonry Gallery -->
                    <div class="masonry-gallery" id="celebration-gallery">
                        <!-- Gallery Item 1 - Large -->
                        <div class="gallery-item opacity-0 transform scale-95 transition-all duration-700 ease-out" data-category="celebrations">
                            <div class="relative group overflow-hidden rounded-lg shadow-lg hover:shadow-2xl transition-all duration-500 cursor-pointer">
                                <img src="{{ asset('images/ODM_Comrades_Chapter_ODM_20th_Celebrations_Mombasa_15_November_2025(1).jpeg') }}" alt="ODM 20th Celebrations" class="w-full h-80 object-cover transition-transform duration-500 group-hover:scale-110">
                                <div class="absolute inset-0 bg-gradient-to-t from-black/70 via-transparent to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-300">
                                    <div class="absolute bottom-0 left-0 right-0 p-4 transform translate-y-full group-hover:translate-y-0 transition-transform duration-300">
                                        <h3 class="text-white font-bold text-lg">Grand Celebration</h3>
                                        <p class="text-white/80 text-sm">ODM 20th Anniversary</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                        <!-- Gallery Item 2 - Medium -->
                        <div class="gallery-item opacity-0 transform scale-95 transition-all duration-700 ease-out delay-100" data-category="leadership">
                            <div class="relative group overflow-hidden rounded-lg shadow-lg hover:shadow-2xl transition-all duration-500 cursor-pointer">
                                <img src="{{ asset('images/ODM_Comrades_Chapter_ODM_20th_Celebrations_Mombasa_15_November_2025(2).jpeg') }}" alt="Leadership Address" class="w-full h-60 object-cover transition-transform duration-500 group-hover:scale-110">
                                <div class="absolute inset-0 bg-gradient-to-t from-black/70 via-transparent to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-300">
                                    <div class="absolute bottom-0 left-0 right-0 p-4 transform translate-y-full group-hover:translate-y-0 transition-transform duration-300">
                                        <h3 class="text-white font-bold text-lg">Leadership Address</h3>
                                        <p class="text-white/80 text-sm">Party Vision</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                        <!-- Gallery Item 3 - Small -->
                        <div class="gallery-item opacity-0 transform scale-95 transition-all duration-700 ease-out delay-200" data-category="celebrations">
                            <div class="relative group overflow-hidden rounded-lg shadow-lg hover:shadow-2xl transition-all duration-500 cursor-pointer">
                                <img src="{{ asset('images/ODM_Comrades_Chapter_ODM_20th_Celebrations_Mombasa_15_November_2025(3).jpeg') }}" alt="Supporters" class="w-full h-48 object-cover transition-transform duration-500 group-hover:scale-110">
                                <div class="absolute inset-0 bg-gradient-to-t from-black/70 via-transparent to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-300">
                                    <div class="absolute bottom-0 left-0 right-0 p-4 transform translate-y-full group-hover:translate-y-0 transition-transform duration-300">
                                        <h3 class="text-white font-bold text-lg">Supporters</h3>
                                        <p class="text-white/80 text-sm">Party Members</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                        <!-- Gallery Item 4 - Large -->
                        <div class="gallery-item opacity-0 transform scale-95 transition-all duration-700 ease-out delay-300" data-category="celebrations">
                            <div class="relative group overflow-hidden rounded-lg shadow-lg hover:shadow-2xl transition-all duration-500 cursor-pointer">
                                <img src="{{ asset('images/ODM_Comrades_Chapter_ODM_20th_Celebrations_Mombasa_15_November_2025(4).jpeg') }}" alt="Main Event" class="w-full h-96 object-cover transition-transform duration-500 group-hover:scale-110">
                                <div class="absolute inset-0 bg-gradient-to-t from-black/70 via-transparent to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-300">
                                    <div class="absolute bottom-0 left-0 right-0 p-4 transform translate-y-full group-hover:translate-y-0 transition-transform duration-300">
                                        <h3 class="text-white font-bold text-lg">Main Event</h3>
                                        <p class="text-white/80 text-sm">Historic Moment</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                        <!-- Gallery Item 5 - Medium -->
                        <div class="gallery-item opacity-0 transform scale-95 transition-all duration-700 ease-out delay-400" data-category="leadership">
                            <div class="relative group overflow-hidden rounded-lg shadow-lg hover:shadow-2xl transition-all duration-500 cursor-pointer">
                                <img src="{{ asset('images/ODM_Comrades_Chapter_ODM_20th_Celebrations_Mombasa_15_November_2025(5).jpeg') }}" alt="Key Speakers" class="w-full h-64 object-cover transition-transform duration-500 group-hover:scale-110">
                                <div class="absolute inset-0 bg-gradient-to-t from-black/70 via-transparent to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-300">
                                    <div class="absolute bottom-0 left-0 right-0 p-4 transform translate-y-full group-hover:translate-y-0 transition-transform duration-300">
                                        <h3 class="text-white font-bold text-lg">Key Speakers</h3>
                                        <p class="text-white/80 text-sm">Party Leaders</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                        <!-- Gallery Item 6 - Small -->
                        <div class="gallery-item opacity-0 transform scale-95 transition-all duration-700 ease-out delay-500" data-category="celebrations">
                            <div class="relative group overflow-hidden rounded-lg shadow-lg hover:shadow-2xl transition-all duration-500 cursor-pointer">
                                <img src="{{ asset('images/ODM_Comrades_Chapter_ODM_20th_Celebrations_Mombasa_15_November_2025(6).jpeg') }}" alt="Crowd" class="w-full h-52 object-cover transition-transform duration-500 group-hover:scale-110">
                                <div class="absolute inset-0 bg-gradient-to-t from-black/70 via-transparent to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-300">
                                    <div class="absolute bottom-0 left-0 right-0 p-4 transform translate-y-full group-hover:translate-y-0 transition-transform duration-300">
                                        <h3 class="text-white font-bold text-lg">Massive Crowd</h3>
                                        <p class="text-white/80 text-sm">Public Support</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                        <!-- Gallery Item 7 - Medium -->
                        <div class="gallery-item opacity-0 transform scale-95 transition-all duration-700 ease-out delay-600" data-category="leadership">
                            <div class="relative group overflow-hidden rounded-lg shadow-lg hover:shadow-2xl transition-all duration-500 cursor-pointer">
                                <img src="{{ asset('images/ODM_Comrades_Chapter_ODM_20th_Celebrations_Mombasa_15_November_2025(7).jpeg') }}" alt="Party Unity" class="w-full h-72 object-cover transition-transform duration-500 group-hover:scale-110">
                                <div class="absolute inset-0 bg-gradient-to-t from-black/70 via-transparent to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-300">
                                    <div class="absolute bottom-0 left-0 right-0 p-4 transform translate-y-full group-hover:translate-y-0 transition-transform duration-300">
                                        <h3 class="text-white font-bold text-lg">Party Unity</h3>
                                        <p class="text-white/80 text-sm">Together We Stand</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                        <!-- Video Gallery Item - Large Featured -->
                        <div class="gallery-item opacity-0 transform scale-95 transition-all duration-700 ease-out delay-700" data-category="celebrations">
                            <div class="relative group overflow-hidden rounded-lg shadow-lg hover:shadow-2xl transition-all duration-500">
                                <video controls class="w-full h-96 object-cover transition-transform duration-500 group-hover:scale-105" poster="{{ asset('images/ODM_Comrades_Chapter_ODM_20th_Celebrations_Mombasa_15_November_2025(1).jpeg') }}">
                                    <source src="{{ asset('images/ODM_Comrades_Chapter_ODM_20th_Celebrations_Mombasa_15_November_2025(cvideo).mp4') }}" type="video/mp4">
                                    Your browser does not support the video tag.
                                </video>
                                <div class="absolute top-4 right-4 bg-orange-600 text-white px-3 py-2 rounded-full text-sm font-medium pointer-events-none">
                                    📹 Video
                                </div>
                                <div class="absolute inset-x-0 bottom-0 bg-gradient-to-t from-black/70 via-transparent to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-300 pointer-events-none">
                                    <div class="p-4 transform translate-y-full group-hover:translate-y-0 transition-transform duration-300">
                                        <h3 class="text-white font-bold text-lg">ODM 20th Anniversary Highlights</h3>
                                        <p class="text-white/80 text-sm">Historic celebrations in Mombasa</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

            <!-- Campus Engagement Gallery Section -->
            <section id="campus" class="py-16 bg-white">
                <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                    <h2 class="text-3xl font-bold text-center text-gray-900 mb-4">Campus Engagement & Tournament</h2>
                    <p class="text-center text-gray-600 mb-8">Multimedia University - November 7, 2025</p>
                    
                    <!-- Filter Buttons -->
                    <div class="flex justify-center mb-8 space-x-4">
                        <button class="campus-filter-btn px-6 py-2 rounded-full bg-orange-500 text-white font-medium transition-colors duration-300" data-filter="all">All Photos</button>
                        <button class="campus-filter-btn px-6 py-2 rounded-full bg-gray-200 text-gray-700 font-medium hover:bg-gray-300 transition-colors duration-300" data-filter="engagement">Engagement</button>
                        <button class="campus-filter-btn px-6 py-2 rounded-full bg-gray-200 text-gray-700 font-medium hover:bg-gray-300 transition-colors duration-300" data-filter="tournament">Tournament</button>
                    </div>
                    
                    <!-- Modern Masonry Gallery -->
                    <div class="masonry-gallery" id="campus-gallery">
                        <!-- Campus Gallery Item 1 - Medium -->
                        <div class="gallery-item opacity-0 transform scale-95 transition-all duration-700 ease-out" data-category="engagement">
                            <div class="relative group overflow-hidden rounded-lg shadow-lg hover:shadow-2xl transition-all duration-500 cursor-pointer">
                                <img src="{{ asset('images/ODM_Comrades_Chapter_Campus_Engagement_and_Tournament_Multimedia_University_07_November_2025(1).jpeg') }}" alt="Campus Engagement" class="w-full h-64 object-cover transition-transform duration-500 group-hover:scale-110">
                                <div class="absolute inset-0 bg-gradient-to-t from-black/70 via-transparent to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-300">
                                    <div class="absolute bottom-0 left-0 right-0 p-4 transform translate-y-full group-hover:translate-y-0 transition-transform duration-300">
                                        <h3 class="text-white font-bold text-lg">Student Engagement</h3>
                                        <p class="text-white/80 text-sm">Campus Activities</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                        <!-- Campus Gallery Item 2 - Small -->
                        <div class="gallery-item opacity-0 transform scale-95 transition-all duration-700 ease-out delay-100" data-category="tournament">
                            <div class="relative group overflow-hidden rounded-lg shadow-lg hover:shadow-2xl transition-all duration-500 cursor-pointer">
                                <img src="{{ asset('images/ODM_Comrades_Chapter_Campus_Engagement_and_Tournament_Multimedia_University_07_November_2025(2).jpeg') }}" alt="Tournament" class="w-full h-48 object-cover transition-transform duration-500 group-hover:scale-110">
                                <div class="absolute inset-0 bg-gradient-to-t from-black/70 via-transparent to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-300">
                                    <div class="absolute bottom-0 left-0 right-0 p-4 transform translate-y-full group-hover:translate-y-0 transition-transform duration-300">
                                        <h3 class="text-white font-bold text-lg">Sports Tournament</h3>
                                        <p class="text-white/80 text-sm">Competition</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                        <!-- Campus Gallery Item 3 - Large -->
                        <div class="gallery-item opacity-0 transform scale-95 transition-all duration-700 ease-out delay-200" data-category="engagement">
                            <div class="relative group overflow-hidden rounded-lg shadow-lg hover:shadow-2xl transition-all duration-500 cursor-pointer">
                                <img src="{{ asset('images/ODM_Comrades_Chapter_Campus_Engagement_and_Tournament_Multimedia_University_07_November_2025(3).jpeg') }}" alt="Campus Event" class="w-full h-80 object-cover transition-transform duration-500 group-hover:scale-110">
                                <div class="absolute inset-0 bg-gradient-to-t from-black/70 via-transparent to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-300">
                                    <div class="absolute bottom-0 left-0 right-0 p-4 transform translate-y-full group-hover:translate-y-0 transition-transform duration-300">
                                        <h3 class="text-white font-bold text-lg">Campus Rally</h3>
                                        <p class="text-white/80 text-sm">Student Participation</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                        <!-- Campus Gallery Item 4 - Medium -->
                        <div class="gallery-item opacity-0 transform scale-95 transition-all duration-700 ease-out delay-300" data-category="tournament">
                            <div class="relative group overflow-hidden rounded-lg shadow-lg hover:shadow-2xl transition-all duration-500 cursor-pointer">
                                <img src="{{ asset('images/ODM_Comrades_Chapter_Campus_Engagement_and_Tournament_Multimedia_University_07_November_2025(4).jpeg') }}" alt="Competition" class="w-full h-60 object-cover transition-transform duration-500 group-hover:scale-110">
                                <div class="absolute inset-0 bg-gradient-to-t from-black/70 via-transparent to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-300">
                                    <div class="absolute bottom-0 left-0 right-0 p-4 transform translate-y-full group-hover:translate-y-0 transition-transform duration-300">
                                        <h3 class="text-white font-bold text-lg">Competition Finals</h3>
                                        <p class="text-white/80 text-sm">Championship</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                        <!-- Campus Gallery Item 5 - Small -->
                        <div class="gallery-item opacity-0 transform scale-95 transition-all duration-700 ease-out delay-400" data-category="engagement">
                            <div class="relative group overflow-hidden rounded-lg shadow-lg hover:shadow-2xl transition-all duration-500 cursor-pointer">
                                <img src="{{ asset('images/ODM_Comrades_Chapter_Campus_Engagement_and_Tournament_Multimedia_University_07_November_2025(5).jpeg') }}" alt="Students" class="w-full h-52 object-cover transition-transform duration-500 group-hover:scale-110">
                                <div class="absolute inset-0 bg-gradient-to-t from-black/70 via-transparent to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-300">
                                    <div class="absolute bottom-0 left-0 right-0 p-4 transform translate-y-full group-hover:translate-y-0 transition-transform duration-300">
                                        <h3 class="text-white font-bold text-lg">Student Leaders</h3>
                                        <p class="text-white/80 text-sm">Leadership</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                        <!-- Campus Gallery Item 6 - Medium -->
                        <div class="gallery-item opacity-0 transform scale-95 transition-all duration-700 ease-out delay-500" data-category="tournament">
                            <div class="relative group overflow-hidden rounded-lg shadow-lg hover:shadow-2xl transition-all duration-500 cursor-pointer">
                                <img src="{{ asset('images/ODM_Comrades_Chapter_Campus_Engagement_and_Tournament_Multimedia_University_07_November_2025(6).jpeg') }}" alt="Tournament Event" class="w-full h-72 object-cover transition-transform duration-500 group-hover:scale-110">
                                <div class="absolute inset-0 bg-gradient-to-t from-black/70 via-transparent to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-300">
                                    <div class="absolute bottom-0 left-0 right-0 p-4 transform translate-y-full group-hover:translate-y-0 transition-transform duration-300">
                                        <h3 class="text-white font-bold text-lg">Tournament Event</h3>
                                        <p class="text-white/80 text-sm">Sports Day</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                        <!-- Campus Gallery Item 7 - Small -->
                        <div class="gallery-item opacity-0 transform scale-95 transition-all duration-700 ease-out delay-600" data-category="engagement">
                            <div class="relative group overflow-hidden rounded-lg shadow-lg hover:shadow-2xl transition-all duration-500 cursor-pointer">
                                <img src="{{ asset('images/ODM_Comrades_Chapter_Campus_Engagement_and_Tournament_Multimedia_University_07_November_2025(7).jpeg') }}" alt="Campus Activity" class="w-full h-56 object-cover transition-transform duration-500 group-hover:scale-110">
                                <div class="absolute inset-0 bg-gradient-to-t from-black/70 via-transparent to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-300">
                                    <div class="absolute bottom-0 left-0 right-0 p-4 transform translate-y-full group-hover:translate-y-0 transition-transform duration-300">
                                        <h3 class="text-white font-bold text-lg">Campus Activity</h3>
                                        <p class="text-white/80 text-sm">Student Life</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                        <!-- Campus Gallery Item 8 - Medium -->
                        <div class="gallery-item opacity-0 transform scale-95 transition-all duration-700 ease-out delay-700" data-category="tournament">
                            <div class="relative group overflow-hidden rounded-lg shadow-lg hover:shadow-2xl transition-all duration-500 cursor-pointer">
                                <img src="{{ asset('images/ODM_Comrades_Chapter_Campus_Engagement_and_Tournament_Multimedia_University_07_November_2025(8).jpeg') }}" alt="Final Event" class="w-full h-64 object-cover transition-transform duration-500 group-hover:scale-110">
                                <div class="absolute inset-0 bg-gradient-to-t from-black/70 via-transparent to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-300">
                                    <div class="absolute bottom-0 left-0 right-0 p-4 transform translate-y-full group-hover:translate-y-0 transition-transform duration-300">
                                        <h3 class="text-white font-bold text-lg">Final Event</h3>
                                        <p class="text-white/80 text-sm">Celebration</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                        <!-- Campus Video Gallery Item - Large Featured -->
                        <div class="gallery-item opacity-0 transform scale-95 transition-all duration-700 ease-out delay-800" data-category="engagement">
                            <div class="relative group overflow-hidden rounded-lg shadow-lg hover:shadow-2xl transition-all duration-500">
                                <video controls class="w-full h-96 object-cover transition-transform duration-500 group-hover:scale-105" poster="{{ asset('images/ODM_Comrades_Chapter_Campus_Engagement_and_Tournament_Multimedia_University_07_November_2025(1).jpeg') }}">
                                    <source src="{{ asset('images/ODM_Comrades_Chapter_Campus_Engagement_and_Tournament_Multimedia_University_07_November_2025(video).mp4') }}" type="video/mp4">
                                    Your browser does not support the video tag.
                                </video>
                                <div class="absolute top-4 right-4 bg-orange-600 text-white px-3 py-2 rounded-full text-sm font-medium pointer-events-none">
                                    📹 Video
                                </div>
                                <div class="absolute inset-x-0 bottom-0 bg-gradient-to-t from-black/70 via-transparent to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-300 pointer-events-none">
                                    <div class="p-4 transform translate-y-full group-hover:translate-y-0 transition-transform duration-300">
                                        <h3 class="text-white font-bold text-lg">Campus Engagement Highlights</h3>
                                        <p class="text-white/80 text-sm">Multimedia University Event</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <!-- Youth League Engagement Section -->
            <section id="youth" class="py-16 bg-gray-50">
                <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                    <h2 class="text-3xl font-bold text-center text-gray-900 mb-12">Youth League Engagement</h2>
                    <div class="grid grid-cols-1 lg:grid-cols-2 gap-8 items-center">
                        <div class="gallery-item opacity-0 transform translate-x-8 transition-all duration-700 ease-out">
                            <img src="{{ asset('images/Odm Comrades chapter first engagement with youth league officials at  Jaramogi Oginga Odinga Foundation in nairobi.jpeg') }}" alt="Youth League Engagement" class="w-full h-96 object-cover rounded-lg shadow-lg">
                        </div>
                        <div class="space-y-4">
                            <h3 class="text-2xl font-semibold text-gray-900">Building Future Leaders</h3>
                            <p class="text-gray-600">Our first engagement with youth league officials at the Jaramogi Oginga Odinga Foundation in Nairobi marked a significant milestone in our commitment to nurturing young leaders within the ODM movement.</p>
                            <div class="space-y-2">
                                <div class="flex items-center space-x-2">
                                    <div class="w-2 h-2 bg-orange-600 rounded-full"></div>
                                    <span class="text-gray-700">Leadership development programs</span>
                                </div>
                                <div class="flex items-center space-x-2">
                                    <div class="w-2 h-2 bg-orange-600 rounded-full"></div>
                                    <span class="text-gray-700">Youth empowerment initiatives</span>
                                </div>
                                <div class="flex items-center space-x-2">
                                    <div class="w-2 h-2 bg-orange-600 rounded-full"></div>
                                    <span class="text-gray-700">Community engagement activities</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </main>

        <!-- Footer Section -->
        <footer class="bg-orange-500 mt-auto" style="background-color: #fb923c;">
            <div class="max-w-7xl mx-auto py-12 px-4 sm:px-6 lg:px-8">
                <!-- Main Footer Content -->
                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8 mb-8">
                    <!-- About ODM Section -->
                    <div class="space-y-4">
                        <h3 class="text-white text-lg font-bold" style="color: #ffffff;">About ODM</h3>
                        <p class="text-white/90 text-sm leading-relaxed" style="color: rgba(255,255,255,0.9);">
                            The Orange Democratic Movement is Kenya's premier political party dedicated to building a democratic, prosperous, and inclusive nation for all Kenyans.
                        </p>
                        <div class="flex space-x-4">
                            <img src="{{ asset('images/orange.jfif') }}" alt="ODM Orange" class="h-8 w-auto opacity-90 rounded">
                        </div>
                    </div>
                    
                    <!-- Quick Links Section -->
                    <div class="space-y-4">
                        <h3 class="text-white text-lg font-bold" style="color: #ffffff;">Quick Links</h3>
                        <ul class="space-y-2">
                            <li><a href="#" class="text-white/90 hover:text-white text-sm transition-colors" style="color: rgba(255,255,255,0.9);">About Us</a></li>
                            <li><a href="#" class="text-white/90 hover:text-white text-sm transition-colors" style="color: rgba(255,255,255,0.9);">Our Leadership</a></li>
                            <li><a href="#" class="text-white/90 hover:text-white text-sm transition-colors" style="color: rgba(255,255,255,0.9);">Party Manifesto</a></li>
                            <li><a href="#" class="text-white/90 hover:text-white text-sm transition-colors" style="color: rgba(255,255,255,0.9);">News & Events</a></li>
                            <li><a href="#" class="text-white/90 hover:text-white text-sm transition-colors" style="color: rgba(255,255,255,0.9);">Membership</a></li>
                        </ul>
                    </div>
                    
                    <!-- Get Involved Section -->
                    <div class="space-y-4">
                        <h3 class="text-white text-lg font-bold" style="color: #ffffff;">Get Involved</h3>
                        <ul class="space-y-2">
                            <li><a href="#" class="text-white/90 hover:text-white text-sm transition-colors" style="color: rgba(255,255,255,0.9);">Join the Movement</a></li>
                            <li><a href="#" class="text-white/90 hover:text-white text-sm transition-colors" style="color: rgba(255,255,255,0.9);">Volunteer</a></li>
                            <li><a href="#" class="text-white/90 hover:text-white text-sm transition-colors" style="color: rgba(255,255,255,0.9);">Donate</a></li>
                            <li><a href="#" class="text-white/90 hover:text-white text-sm transition-colors" style="color: rgba(255,255,255,0.9);">Events</a></li>
                            <li><a href="#" class="text-white/90 hover:text-white text-sm transition-colors" style="color: rgba(255,255,255,0.9);">Contact Us</a></li>
                        </ul>
                    </div>
                    
                    <!-- Contact Section -->
                    <div class="space-y-4">
                        <h3 class="text-white text-lg font-bold" style="color: #ffffff;">Contact Info</h3>
                        <div class="space-y-2">
                            <p class="text-white/90 text-sm" style="color: rgba(255,255,255,0.9);">
                                <strong>Headquarters:</strong><br>
                                Orange House, Jakaya Kikwete Road<br>
                                Nairobi, Kenya
                            </p>
                            <p class="text-white/90 text-sm" style="color: rgba(255,255,255,0.9);">
                                <strong>Email:</strong><br>
                                info@odm.co.ke
                            </p>
                            <p class="text-white/90 text-sm" style="color: rgba(255,255,255,0.9);">
                                <strong>Phone:</strong><br>
                                +254 7XX XXX XXX
                            </p>
                        </div>
                    </div>
                </div>
                
                <!-- Divider -->
                <div class="border-t border-white/30 mb-8" style="border-color: rgba(255,255,255,0.3);"></div>
                
                <!-- Bottom Footer -->
                <div class="flex flex-col md:flex-row justify-between items-center">
                    <!-- Copyright - Left Side -->
                    <div class="text-white text-center md:text-left mb-4 md:mb-0" style="color: #ffffff;">
                        <p class="text-sm">&copy; {{ date('Y') }} ODM Comrades Chapter. All rights reserved.</p>
                        <div class="flex space-x-4 mt-2">
                            <a href="#" class="text-white/90 hover:text-white text-xs transition-colors" style="color: rgba(255,255,255,0.9);">Privacy Policy</a>
                            <a href="#" class="text-white/90 hover:text-white text-xs transition-colors" style="color: rgba(255,255,255,0.9);">Terms of Service</a>
                            <a href="#" class="text-white/90 hover:text-white text-xs transition-colors" style="color: rgba(255,255,255,0.9);">Contact</a>
                        </div>
                    </div>
                    
                    <!-- Social Media & Orange Image - Right Side -->
                    <div class="flex items-center space-x-6">
                        <div class="flex space-x-4">
                            <a href="#" class="text-white/90 hover:text-white transition-colors" style="color: rgba(255,255,255,0.9);">
                                <svg class="h-5 w-5" fill="currentColor" viewBox="0 0 24 24">
                                    <path d="M24 12.073c0-6.627-5.373-12-12-12s-12 5.373-12 12c0 5.99 4.388 10.954 10.125 11.854v-8.385H7.078v-3.47h3.047V9.43c0-3.007 1.792-4.669 4.533-4.669 1.312 0 2.686.235 2.686.235v2.953H15.83c-1.491 0-1.956.925-1.956 1.874v2.25h3.328l-.532 3.47h-2.796v8.385C19.612 23.027 24 18.062 24 12.073z"/>
                                </svg>
                            </a>
                            <a href="#" class="text-white/90 hover:text-white transition-colors" style="color: rgba(255,255,255,0.9);">
                                <svg class="h-5 w-5" fill="currentColor" viewBox="0 0 24 24">
                                    <path d="M23.953 4.57a10 10 0 01-2.825.775 4.958 4.958 0 002.163-2.723c-.951.555-2.005.959-3.127 1.184a4.92 4.92 0 00-8.384 4.482C7.69 8.095 4.067 6.13 1.64 3.162a4.822 4.822 0 00-.666 2.475c0 1.71.87 3.213 2.188 4.096a4.904 4.904 0 01-2.228-.616v.06a4.923 4.923 0 003.946 4.827 4.996 4.996 0 01-2.212.085 4.936 4.936 0 004.604 3.417 9.867 9.867 0 01-6.102 2.105c-.39 0-.779-.023-1.17-.067a13.995 13.995 0 007.557 2.209c9.053 0 13.998-7.496 13.998-13.985 0-.21 0-.42-.015-.63A9.935 9.935 0 0024 4.59z"/>
                                </svg>
                            </a>
                        </div>
                        <img src="{{ asset('images/orange.jfif') }}" alt="ODM Orange" class="h-12 w-auto opacity-90 rounded">
                    </div>
                </div>
            </div>
        </footer>

        <!-- JavaScript for Animations -->
        <script>
            document.addEventListener('DOMContentLoaded', function() {
                // Mobile menu toggle functionality
                const mobileMenuButton = document.getElementById('mobile-menu-button');
                const mobileMenu = document.getElementById('mobile-menu');
                
                if (mobileMenuButton && mobileMenu) {
                    mobileMenuButton.addEventListener('click', function() {
                        mobileMenu.classList.toggle('hidden');
                    });
                }
                
                // Close mobile menu when clicking on links
                const mobileMenuLinks = mobileMenu.querySelectorAll('a');
                mobileMenuLinks.forEach(link => {
                    link.addEventListener('click', function() {
                        mobileMenu.classList.add('hidden');
                    });
                });
                
                // Close mobile menu when clicking outside
                document.addEventListener('click', function(event) {
                    if (!mobileMenu.contains(event.target) && !mobileMenuButton.contains(event.target)) {
                        mobileMenu.classList.add('hidden');
                    }
                });
                
                // Slideshow functionality - Gentle fade transitions
                const slides = document.querySelectorAll('.slide');
                let currentSlide = 0;
                
                function showSlide(index) {
                    slides.forEach((slide, i) => {
                        if (i === index) {
                            // Current slide - visible
                            slide.style.opacity = '1';
                        } else {
                            // Hidden slides
                            slide.style.opacity = '0';
                        }
                    });
                }
                
                function nextSlide() {
                    currentSlide = (currentSlide + 1) % slides.length;
                    showSlide(currentSlide);
                }
                
                // Initialize first slide
                showSlide(0);
                
                // Change slide every 6 seconds (slower for comfort)
                setInterval(nextSlide, 6000);
                
                // Gallery Filter Functionality
                const filterBtns = document.querySelectorAll('.filter-btn');
                const galleryItems = document.querySelectorAll('.gallery-item');
                
                filterBtns.forEach(btn => {
                    btn.addEventListener('click', function() {
                        const filter = this.getAttribute('data-filter');
                        
                        // Update active button styling
                        filterBtns.forEach(b => {
                            b.classList.remove('bg-orange-500', 'text-white');
                            b.classList.add('bg-gray-200', 'text-gray-700');
                        });
                        this.classList.remove('bg-gray-200', 'text-gray-700');
                        this.classList.add('bg-orange-500', 'text-white');
                        
                        // Filter gallery items
                        galleryItems.forEach(item => {
                            const category = item.getAttribute('data-category');
                            if (filter === 'all' || category === filter) {
                                item.classList.remove('hidden');
                                item.classList.add('visible');
                            } else {
                                item.classList.add('hidden');
                                item.classList.remove('visible');
                            }
                        });
                    });
                });
                
                // Campus Gallery Filter Functionality
                const campusFilterBtns = document.querySelectorAll('.campus-filter-btn');
                const campusGalleryItems = document.querySelectorAll('#campus-gallery .gallery-item');
                
                campusFilterBtns.forEach(btn => {
                    btn.addEventListener('click', function() {
                        const filter = this.getAttribute('data-filter');
                        
                        // Update active button styling
                        campusFilterBtns.forEach(b => {
                            b.classList.remove('bg-orange-500', 'text-white');
                            b.classList.add('bg-gray-200', 'text-gray-700');
                        });
                        this.classList.remove('bg-gray-200', 'text-gray-700');
                        this.classList.add('bg-orange-500', 'text-white');
                        
                        // Filter gallery items
                        campusGalleryItems.forEach(item => {
                            const category = item.getAttribute('data-category');
                            if (filter === 'all' || category === filter) {
                                item.classList.remove('hidden');
                                item.classList.add('visible');
                            } else {
                                item.classList.add('hidden');
                                item.classList.remove('visible');
                            }
                        });
                    });
                });
                
                // Lightbox functionality
                const galleryImages = document.querySelectorAll('.gallery-item img');
                const lightboxModal = document.createElement('div');
                lightboxModal.className = 'lightbox-modal';
                lightboxModal.innerHTML = `
                    <div class="lightbox-content">
                        <span class="lightbox-close">&times;</span>
                        <img class="lightbox-image" src="" alt="">
                    </div>
                `;
                document.body.appendChild(lightboxModal);
                
                galleryImages.forEach(img => {
                    img.addEventListener('click', function() {
                        const lightboxImg = lightboxModal.querySelector('.lightbox-image');
                        lightboxImg.src = this.src;
                        lightboxImg.alt = this.alt;
                        lightboxModal.style.display = 'block';
                    });
                });
                
                const closeBtn = lightboxModal.querySelector('.lightbox-close');
                closeBtn.addEventListener('click', function() {
                    lightboxModal.style.display = 'none';
                });
                
                lightboxModal.addEventListener('click', function(e) {
                    if (e.target === lightboxModal) {
                        lightboxModal.style.display = 'none';
                    }
                });
                
                // Intersection Observer for scroll animations
                const observerOptions = {
                    threshold: 0.1,
                    rootMargin: '0px 0px -50px 0px'
                };

                const observer = new IntersectionObserver(function(entries) {
                    entries.forEach(entry => {
                        if (entry.isIntersecting) {
                            entry.target.classList.remove('opacity-0', 'transform', 'scale-95');
                            entry.target.classList.add('opacity-100', 'scale-100');
                        }
                    });
                }, observerOptions);

                // Observe all gallery items
                document.querySelectorAll('.gallery-item').forEach(item => {
                    observer.observe(item);
                });

                // Add smooth scroll behavior
                document.querySelectorAll('a[href^="#"]').forEach(anchor => {
                    anchor.addEventListener('click', function (e) {
                        e.preventDefault();
                        const target = document.querySelector(this.getAttribute('href'));
                        if (target) {
                            target.scrollIntoView({
                                behavior: 'smooth'
                            });
                        }
                    });
                });
            });
        </script>
        
        <style>
            /* Masonry Gallery Layout */
            .masonry-gallery {
                column-count: 1;
                column-gap: 1.5rem;
            }
            
            @media (min-width: 640px) {
                .masonry-gallery {
                    column-count: 2;
                }
            }
            
            @media (min-width: 1024px) {
                .masonry-gallery {
                    column-count: 3;
                }
            }
            
            @media (min-width: 1280px) {
                .masonry-gallery {
                    column-count: 4;
                }
            }
            
            .gallery-item {
                break-inside: avoid;
                margin-bottom: 1.5rem;
            }
            
            /* Lightbox Modal */
            .lightbox-modal {
                display: none;
                position: fixed;
                z-index: 9999;
                left: 0;
                top: 0;
                width: 100%;
                height: 100%;
                background-color: rgba(0,0,0,0.95);
                backdrop-filter: blur(10px);
            }
            
            .lightbox-content {
                position: relative;
                margin: auto;
                padding: 20px;
                width: 90%;
                max-width: 1200px;
                height: 90vh;
                display: flex;
                align-items: center;
                justify-content: center;
            }
            
            .lightbox-image {
                max-width: 100%;
                max-height: 100%;
                object-fit: contain;
                border-radius: 8px;
            }
            
            .lightbox-close {
                position: absolute;
                top: 20px;
                right: 40px;
                color: white;
                font-size: 40px;
                font-weight: bold;
                cursor: pointer;
                background: rgba(0,0,0,0.5);
                border-radius: 50%;
                width: 50px;
                height: 50px;
                display: flex;
                align-items: center;
                justify-content: center;
                transition: background-color 0.3s;
            }
            
            .lightbox-close:hover {
                background: rgba(0,0,0,0.8);
            }
            
            /* Filter animations */
            .gallery-item.hidden {
                display: none;
            }
            
            .gallery-item.visible {
                display: block;
                animation: fadeInUp 0.6s ease-out;
            }
            
            @keyframes fadeInUp {
                from {
                    opacity: 0;
                    transform: translateY(30px);
                }
                to {
                    opacity: 1;
                    transform: translateY(0);
                }
            }
        </style>
    </body>
</html>
