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
        <nav class="bg-white border-b border-gray-200 sticky top-0 z-50">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                <div class="flex justify-between h-16">
                    <div class="flex">
                        <div class="shrink-0 flex items-center">
                            <!-- Logo / Brand Name -->
                            <a href="{{ url('/') }}" class="text-2xl font-bold text-orange-600 tracking-tight flex items-center gap-3">
                                <img src="{{ asset('images/logo.jpeg') }}" alt="ODM Logo" class="h-10 w-10 object-contain">
                                <span class="text-blue-900">ODM</span> Comrades Chapter
                            </a>
                        </div>
                    </div>
                    <div class="flex items-center space-x-4">
                        <a href="#leadership" class="text-sm font-medium text-gray-700 hover:text-orange-600 hidden md:block">Leadership</a>
                        <a href="#celebrations" class="text-sm font-medium text-gray-700 hover:text-orange-600 hidden md:block">Celebrations</a>
                        <a href="#campus" class="text-sm font-medium text-gray-700 hover:text-orange-600 hidden md:block">Campus</a>
                        <a href="#youth" class="text-sm font-medium text-gray-700 hover:text-orange-600 hidden md:block">Youth</a>
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
                <div class="relative z-10 max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-12 lg:py-24 text-center">
                    <h1 class="text-4xl tracking-tight font-extrabold sm:text-5xl md:text-6xl mb-6">
                        <span class="block text-white" style="text-shadow: 2px 2px 4px rgba(0,0,0,0.8);">Welcome to</span>
                        <span class="block text-orange-500" style="text-shadow: 2px 2px 4px rgba(0,0,0,0.8);">ODM Comrades Chapter</span>
                    </h1>
                    <p class="mt-3 max-w-md mx-auto text-base sm:text-lg md:mt-5 md:text-xl md:max-w-3xl text-white" style="text-shadow: 1px 1px 2px rgba(0,0,0,0.8);">
                       Empowering the youth and comrades through the Orange Democratic Movement. Join the movement to champion for reputable leadership, inclusivity, and progressive change in our institutions and communities.
                    </p>
                    
                    @if (Route::has('membership'))
                    <div class="mt-8 max-w-md mx-auto sm:flex sm:justify-center gap-4">
                        <div class="rounded-md shadow-lg">
                            <a href="{{ route('membership') }}" class="w-full flex items-center justify-center px-8 py-3 border border-transparent text-base font-medium rounded-md text-white hover:bg-orange-600 md:py-4 md:text-lg md:px-10 transition duration-150 ease-in-out" style="background-color: #fb923c;">
                                Join the Movement
                            </a>
                        </div>
                        <div class="mt-3 sm:mt-0 sm:ml-3">
                             <a href="{{ route('login') }}" class="w-full flex items-center justify-center px-8 py-3 border border-transparent text-base font-medium rounded-md text-white hover:bg-blue-700 md:py-4 md:text-lg md:px-10 transition duration-150 ease-in-out" style="background-color: #1e40af;">
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
                    <p class="text-center text-gray-600 mb-12">Celebrating two decades of democratic leadership and service to Kenyans</p>
                    
                    <!-- Animated Gallery Grid -->
                    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6" id="celebration-gallery">
                        <div class="gallery-item opacity-0 transform translate-y-8 transition-all duration-700 ease-out">
                            <img src="{{ asset('images/ODM_Comrades_Chapter_ODM_20th_Celebrations_Mombasa_15_November_2025(1).jpeg') }}" alt="ODM 20th Celebrations" class="w-full h-64 object-cover rounded-lg shadow-lg hover:shadow-xl transition-shadow duration-300">
                        </div>
                        <div class="gallery-item opacity-0 transform translate-y-8 transition-all duration-700 ease-out delay-100">
                            <img src="{{ asset('images/ODM_Comrades_Chapter_ODM_20th_Celebrations_Mombasa_15_November_2025(2).jpeg') }}" alt="ODM 20th Celebrations" class="w-full h-64 object-cover rounded-lg shadow-lg hover:shadow-xl transition-shadow duration-300">
                        </div>
                        <div class="gallery-item opacity-0 transform translate-y-8 transition-all duration-700 ease-out delay-200">
                            <img src="{{ asset('images/ODM_Comrades_Chapter_ODM_20th_Celebrations_Mombasa_15_November_2025(3).jpeg') }}" alt="ODM 20th Celebrations" class="w-full h-64 object-cover rounded-lg shadow-lg hover:shadow-xl transition-shadow duration-300">
                        </div>
                        <div class="gallery-item opacity-0 transform translate-y-8 transition-all duration-700 ease-out delay-300">
                            <img src="{{ asset('images/ODM_Comrades_Chapter_ODM_20th_Celebrations_Mombasa_15_November_2025(4).jpeg') }}" alt="ODM 20th Celebrations" class="w-full h-64 object-cover rounded-lg shadow-lg hover:shadow-xl transition-shadow duration-300">
                        </div>
                        <div class="gallery-item opacity-0 transform translate-y-8 transition-all duration-700 ease-out delay-400">
                            <img src="{{ asset('images/ODM_Comrades_Chapter_ODM_20th_Celebrations_Mombasa_15_November_2025(5).jpeg') }}" alt="ODM 20th Celebrations" class="w-full h-64 object-cover rounded-lg shadow-lg hover:shadow-xl transition-shadow duration-300">
                        </div>
                        <div class="gallery-item opacity-0 transform translate-y-8 transition-all duration-700 ease-out delay-500">
                            <img src="{{ asset('images/ODM_Comrades_Chapter_ODM_20th_Celebrations_Mombasa_15_November_2025(6).jpeg') }}" alt="ODM 20th Celebrations" class="w-full h-64 object-cover rounded-lg shadow-lg hover:shadow-xl transition-shadow duration-300">
                        </div>
                        <div class="gallery-item opacity-0 transform translate-y-8 transition-all duration-700 ease-out delay-600">
                            <img src="{{ asset('images/ODM_Comrades_Chapter_ODM_20th_Celebrations_Mombasa_15_November_2025(7).jpeg') }}" alt="ODM 20th Celebrations" class="w-full h-64 object-cover rounded-lg shadow-lg hover:shadow-xl transition-shadow duration-300">
                        </div>
                        <!-- Video from celebrations -->
                        <div class="gallery-item opacity-0 transform translate-y-8 transition-all duration-700 ease-out delay-700 lg:col-span-2">
                            <div class="relative">
                                <video controls class="w-full h-64 object-cover rounded-lg shadow-lg">
                                    <source src="{{ asset('images/ODM_Comrades_Chapter_ODM_20th_Celebrations_Mombasa_15_November_2025(cvideo).mp4') }}" type="video/mp4">
                                    Your browser does not support the video tag.
                                </video>
                                <div class="absolute top-2 right-2 bg-orange-600 text-white px-2 py-1 rounded text-sm">
                                    Video
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <!-- Campus Engagement Gallery Section -->
            <section id="campus" class="py-16 bg-white">
                <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                    <h2 class="text-3xl font-bold text-center text-gray-900 mb-4">Campus Engagement & Tournament</h2>
                    <p class="text-center text-gray-600 mb-12">Multimedia University - November 7, 2025</p>
                    
                    <!-- Animated Gallery Grid -->
                    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6" id="campus-gallery">
                        <div class="gallery-item opacity-0 transform translate-y-8 transition-all duration-700 ease-out">
                            <img src="{{ asset('images/ODM_Comrades_Chapter_Campus_Engagement_and_Tournament_Multimedia_University_07_November_2025(1).jpeg') }}" alt="Campus Engagement" class="w-full h-48 object-cover rounded-lg shadow-lg hover:shadow-xl transition-shadow duration-300">
                        </div>
                        <div class="gallery-item opacity-0 transform translate-y-8 transition-all duration-700 ease-out delay-100">
                            <img src="{{ asset('images/ODM_Comrades_Chapter_Campus_Engagement_and_Tournament_Multimedia_University_07_November_2025(2).jpeg') }}" alt="Campus Engagement" class="w-full h-48 object-cover rounded-lg shadow-lg hover:shadow-xl transition-shadow duration-300">
                        </div>
                        <div class="gallery-item opacity-0 transform translate-y-8 transition-all duration-700 ease-out delay-200">
                            <img src="{{ asset('images/ODM_Comrades_Chapter_Campus_Engagement_and_Tournament_Multimedia_University_07_November_2025(3).jpeg') }}" alt="Campus Engagement" class="w-full h-48 object-cover rounded-lg shadow-lg hover:shadow-xl transition-shadow duration-300">
                        </div>
                        <div class="gallery-item opacity-0 transform translate-y-8 transition-all duration-700 ease-out delay-300">
                            <img src="{{ asset('images/ODM_Comrades_Chapter_Campus_Engagement_and_Tournament_Multimedia_University_07_November_2025(4).jpeg') }}" alt="Campus Engagement" class="w-full h-48 object-cover rounded-lg shadow-lg hover:shadow-xl transition-shadow duration-300">
                        </div>
                        <div class="gallery-item opacity-0 transform translate-y-8 transition-all duration-700 ease-out delay-400">
                            <img src="{{ asset('images/ODM_Comrades_Chapter_Campus_Engagement_and_Tournament_Multimedia_University_07_November_2025(5).jpeg') }}" alt="Campus Engagement" class="w-full h-48 object-cover rounded-lg shadow-lg hover:shadow-xl transition-shadow duration-300">
                        </div>
                        <div class="gallery-item opacity-0 transform translate-y-8 transition-all duration-700 ease-out delay-500">
                            <img src="{{ asset('images/ODM_Comrades_Chapter_Campus_Engagement_and_Tournament_Multimedia_University_07_November_2025(6).jpeg') }}" alt="Campus Engagement" class="w-full h-48 object-cover rounded-lg shadow-lg hover:shadow-xl transition-shadow duration-300">
                        </div>
                        <div class="gallery-item opacity-0 transform translate-y-8 transition-all duration-700 ease-out delay-600">
                            <img src="{{ asset('images/ODM_Comrades_Chapter_Campus_Engagement_and_Tournament_Multimedia_University_07_November_2025(7).jpeg') }}" alt="Campus Engagement" class="w-full h-48 object-cover rounded-lg shadow-lg hover:shadow-xl transition-shadow duration-300">
                        </div>
                        <div class="gallery-item opacity-0 transform translate-y-8 transition-all duration-700 ease-out delay-700">
                            <img src="{{ asset('images/ODM_Comrades_Chapter_Campus_Engagement_and_Tournament_Multimedia_University_07_November_2025(8).jpeg') }}" alt="Campus Engagement" class="w-full h-48 object-cover rounded-lg shadow-lg hover:shadow-xl transition-shadow duration-300">
                        </div>
                        <!-- Video from campus engagement -->
                        <div class="gallery-item opacity-0 transform translate-y-8 transition-all duration-700 ease-out delay-800 lg:col-span-4">
                            <div class="relative">
                                <video controls class="w-full h-96 object-cover rounded-lg shadow-lg">
                                    <source src="{{ asset('images/ODM_Comrades_Chapter_Campus_Engagement_and_Tournament_Multimedia_University_07_November_2025(video).mp4') }}" type="video/mp4">
                                    Your browser does not support the video tag.
                                </video>
                                <div class="absolute top-2 right-2 bg-orange-600 text-white px-2 py-1 rounded text-sm">
                                    Video
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
                
                // Intersection Observer for scroll animations
                const observerOptions = {
                    threshold: 0.1,
                    rootMargin: '0px 0px -50px 0px'
                };

                const observer = new IntersectionObserver(function(entries) {
                    entries.forEach(entry => {
                        if (entry.isIntersecting) {
                            entry.target.classList.remove('opacity-0', 'translate-y-8', 'translate-x-8');
                            entry.target.classList.add('opacity-100', 'translate-y-0', 'translate-x-0');
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
    </body>
</html>
