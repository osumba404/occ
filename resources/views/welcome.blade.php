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
                        
                        <!-- Events Dropdown -->
                        <div class="relative group" id="events-dropdown-container">
                            <button id="events-button" class="group inline-flex items-center text-sm font-medium text-gray-700 hover:text-orange-600 focus:outline-none">
                                <span>Events</span>
                                <svg class="ml-2 h-5 w-5 text-gray-400 group-hover:text-orange-600 transition-transform duration-200" id="events-arrow" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                    <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd" />
                                </svg>
                            </button>

                            <!-- Dropdown Menu -->
                            <div id="events-menu" class="hidden absolute z-50 left-1/2 transform -translate-x-1/2 mt-3 w-80 max-w-[90vw] bg-white rounded-xl shadow-2xl ring-1 ring-black ring-opacity-5 overflow-hidden origin-top transition-all duration-200 ease-out opacity-0 scale-95 origin-top-left">
                                <div class="p-4 bg-orange-50 border-b border-orange-100">
                                    <h3 class="text-sm font-bold text-orange-800 uppercase tracking-wider">2026 Events Schedule</h3>
                                </div>
                                <div class="max-h-[60vh] overflow-y-auto py-2">
                                    <!-- Event 1 -->
                                    <button class="w-full text-left px-4 py-3 hover:bg-gray-50 border-b border-gray-100 last:border-0 transition-colors duration-150 event-item-btn" 
                                            data-title="Coast Chapter (Mombasa)" 
                                            data-date="February 17, 2026"
                                            data-location="Mombasa, Kilifi, Kwale, Taita Taveta"
                                            data-venue="Tononoka Hall Mombasa"
                                            data-attendees="1000 students (From Mombasa, Kilifi, Kwale, Taita Taveta)"
                                            data-theme="&quot;From Campus to Country: Reawakening ODM Ideology Among Students&quot;"
                                            data-objectives="To register over 7000 students, launch Coast Region Comrades Chapter, champion voter registration, and offer political education.">
                                        <div class="flex justify-between items-start">
                                            <div>
                                                <p class="text-sm font-bold text-blue-900">Coast Chapter</p>
                                                <p class="text-xs text-gray-500 mt-0.5">Mombasa, Kilifi, Kwale, Taita Taveta</p>
                                            </div>
                                            <span class="inline-flex items-center px-2 py-0.5 rounded text-xs font-medium bg-orange-100 text-orange-800 whitespace-nowrap">
                                                Feb 17
                                            </span>
                                        </div>
                                    </button>
                                    <!-- Event 2 -->
                                    <button class="w-full text-left px-4 py-3 hover:bg-gray-50 border-b border-gray-100 last:border-0 transition-colors duration-150 event-item-btn"
                                            data-title="Nakuru Chapter"
                                            data-date="February 23, 2026"
                                            data-venue="TBD"
                                            data-theme="Regional Mobilization"
                                            data-attendees="Students from Nakuru Region">
                                        <div class="flex justify-between items-center">
                                            <p class="text-sm font-bold text-gray-800">Nakuru Chapter</p>
                                            <span class="inline-flex items-center px-2 py-0.5 rounded text-xs font-medium bg-gray-100 text-gray-600 whitespace-nowrap">Feb 23</span>
                                        </div>
                                    </button>
                                    <!-- Event 3 -->
                                    <button class="w-full text-left px-4 py-3 hover:bg-gray-50 border-b border-gray-100 last:border-0 transition-colors duration-150 event-item-btn"
                                            data-title="Narok Chapter"
                                            data-date="February 24, 2026"
                                            data-venue="TBD"
                                            data-theme="Grassroots Activation"
                                            data-attendees="Students from Narok Region">
                                        <div class="flex justify-between items-center">
                                            <p class="text-sm font-bold text-gray-800">Narok Chapter</p>
                                            <span class="inline-flex items-center px-2 py-0.5 rounded text-xs font-medium bg-gray-100 text-gray-600 whitespace-nowrap">Feb 24</span>
                                        </div>
                                    </button>
                                    <!-- Event 4 -->
                                    <button class="w-full text-left px-4 py-3 hover:bg-gray-50 border-b border-gray-100 last:border-0 transition-colors duration-150 event-item-btn"
                                            data-title="Kisumu Chapter (Nyanza)"
                                            data-date="March 4, 2026"
                                            data-location="Homa Bay, Migori, Kisumu, Siaya"
                                            data-venue="TBD"
                                            data-theme="Strategy & Consolidation"
                                            data-attendees="Students from Nyanza Region">
                                        <div class="flex justify-between items-start">
                                            <div>
                                                <p class="text-sm font-bold text-gray-800">Kisumu Chapter</p>
                                                <p class="text-xs text-gray-500 mt-0.5">Nyanza Region</p>
                                            </div>
                                            <span class="inline-flex items-center px-2 py-0.5 rounded text-xs font-medium bg-gray-100 text-gray-600 whitespace-nowrap">Mar 4</span>
                                        </div>
                                    </button>
                                    <!-- Event 5 -->
                                    <button class="w-full text-left px-4 py-3 hover:bg-gray-50 border-b border-gray-100 last:border-0 transition-colors duration-150 event-item-btn"
                                            data-title="Kakamega Chapter (Western)"
                                            data-date="March 5, 2026"
                                            data-venue="TBD"
                                            data-theme="Western Region Activation"
                                            data-attendees="Students from Western Region">
                                        <div class="flex justify-between items-center">
                                            <p class="text-sm font-bold text-gray-800">Kakamega Chapter</p>
                                            <span class="inline-flex items-center px-2 py-0.5 rounded text-xs font-medium bg-gray-100 text-gray-600 whitespace-nowrap">Mar 5</span>
                                        </div>
                                    </button>
                                    <!-- Event 6 -->
                                    <button class="w-full text-left px-4 py-3 hover:bg-gray-50 border-b border-gray-100 last:border-0 transition-colors duration-150 event-item-btn"
                                            data-title="Eldoret Chapter (Rift Valley)"
                                            data-date="April 9, 2026"
                                            data-venue="TBD"
                                            data-theme="Rift Valley Engagement"
                                            data-attendees="Students from Rift Valley">
                                        <div class="flex justify-between items-center">
                                            <p class="text-sm font-bold text-gray-800">Eldoret Chapter</p>
                                            <span class="inline-flex items-center px-2 py-0.5 rounded text-xs font-medium bg-gray-100 text-gray-600 whitespace-nowrap">Apr 9</span>
                                        </div>
                                    </button>
                                    <!-- Event 7 -->
                                    <button class="w-full text-left px-4 py-3 hover:bg-gray-50 border-b border-gray-100 last:border-0 transition-colors duration-150 event-item-btn"
                                            data-title="Eastern & N.E Chapter"
                                            data-date="April 30, 2026"
                                            data-venue="TBD"
                                            data-theme="Regional Outreach"
                                            data-attendees="Students from Eastern & NE Region">
                                        <div class="flex justify-between items-center">
                                            <p class="text-sm font-bold text-gray-800">Eastern & N.E Chapter</p>
                                            <span class="inline-flex items-center px-2 py-0.5 rounded text-xs font-medium bg-gray-100 text-gray-600 whitespace-nowrap">Apr 30</span>
                                        </div>
                                    </button>
                                    <!-- Event 8 -->
                                    <button class="w-full text-left px-4 py-3 hover:bg-gray-50 border-b border-gray-100 last:border-0 transition-colors duration-150 event-item-btn"
                                            data-title="Central Kenya Chapter (Nyeri)"
                                            data-date="May 13, 2026"
                                            data-venue="TBD"
                                            data-theme="Mountain Region Launch"
                                            data-attendees="Students from Central Region">
                                        <div class="flex justify-between items-center">
                                            <p class="text-sm font-bold text-gray-800">Central Kenya (Nyeri)</p>
                                            <span class="inline-flex items-center px-2 py-0.5 rounded text-xs font-medium bg-gray-100 text-gray-600 whitespace-nowrap">May 13</span>
                                        </div>
                                    </button>
                                    <!-- Event 9 -->
                                    <button class="w-full text-left px-4 py-3 hover:bg-orange-50 border-b border-gray-100 last:border-0 bg-orange-50/50 transition-colors duration-150 event-item-btn"
                                            data-title="ODM COMRADES CHAPTER MEGALAUNCH"
                                            data-date="May 29, 2026"
                                            data-venue="TBD"
                                            data-theme="National Launch"
                                            data-attendees="All Chapters">
                                        <div class="flex justify-between items-center">
                                            <p class="text-sm font-bold text-orange-900">MEGALAUNCH</p>
                                            <span class="inline-flex items-center px-2 py-0.5 rounded text-xs font-bold bg-orange-200 text-orange-800 whitespace-nowrap">May 29</span>
                                        </div>
                                    </button>
                                    <!-- Event 10 -->
                                    <button class="w-full text-left px-4 py-3 hover:bg-gray-50 last:border-0 transition-colors duration-150 event-item-btn"
                                            data-title="Kisii & Nyamira Chapter"
                                            data-date="June 19, 2026"
                                            data-venue="TBD"
                                            data-theme="Regional Activation"
                                            data-attendees="Students from Kisii & Nyamira">
                                        <div class="flex justify-between items-center">
                                            <p class="text-sm font-bold text-gray-800">Kisii & Nyamira</p>
                                            <span class="inline-flex items-center px-2 py-0.5 rounded text-xs font-medium bg-gray-100 text-gray-600 whitespace-nowrap">Jun 19</span>
                                        </div>
                                    </button>
                                </div>
                            </div>
                        </div>

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
                    
                    <!-- Mobile Events Section -->
                    <div class="mobile-events-section">
                        <button id="mobile-events-toggle" class="w-full flex items-center justify-between px-3 py-2 text-base font-medium text-gray-700 hover:text-orange-600 hover:bg-gray-50 rounded-md">
                            <span>Events</span>
                            <svg id="mobile-events-arrow" class="w-5 h-5 transition-transform duration-200" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                            </svg>
                        </button>
                        <div id="mobile-events-list" class="hidden pl-6 pr-3 py-2 space-y-1">
                            <button class="w-full text-left px-3 py-2 text-sm text-gray-600 hover:text-orange-600 hover:bg-gray-50 rounded-md event-item-btn"
                                    data-title="Coast Chapter (Mombasa)" 
                                    data-date="February 17, 2026"
                                    data-location="Mombasa, Kilifi, Kwale, Taita Taveta"
                                    data-venue="Tononoka Hall Mombasa"
                                    data-attendees="1000 students (From Mombasa, Kilifi, Kwale, Taita Taveta)"
                                    data-theme="&quot;From Campus to Country: Reawakening ODM Ideology Among Students&quot;">
                                Coast Chapter - Feb 17
                            </button>
                            <button class="w-full text-left px-3 py-2 text-sm text-gray-600 hover:text-orange-600 hover:bg-gray-50 rounded-md event-item-btn"
                                    data-title="Nakuru Chapter"
                                    data-date="February 23, 2026"
                                    data-venue="TBD"
                                    data-theme="Regional Mobilization"
                                    data-attendees="Students from Nakuru Region">
                                Nakuru Chapter - Feb 23
                            </button>
                            <button class="w-full text-left px-3 py-2 text-sm text-gray-600 hover:text-orange-600 hover:bg-gray-50 rounded-md event-item-btn"
                                    data-title="Narok Chapter"
                                    data-date="February 24, 2026"
                                    data-venue="TBD"
                                    data-theme="Grassroots Activation"
                                    data-attendees="Students from Narok Region">
                                Narok Chapter - Feb 24
                            </button>
                            <button class="w-full text-left px-3 py-2 text-sm text-gray-600 hover:text-orange-600 hover:bg-gray-50 rounded-md event-item-btn"
                                    data-title="Kisumu Chapter (Nyanza)"
                                    data-date="March 4, 2026"
                                    data-location="Homa Bay, Migori, Kisumu, Siaya"
                                    data-venue="TBD"
                                    data-theme="Strategy & Consolidation"
                                    data-attendees="Students from Nyanza Region">
                                Kisumu Chapter - Mar 4
                            </button>
                            <button class="w-full text-left px-3 py-2 text-sm text-gray-600 hover:text-orange-600 hover:bg-gray-50 rounded-md event-item-btn"
                                    data-title="Kakamega Chapter (Western)"
                                    data-date="March 5, 2026"
                                    data-venue="TBD"
                                    data-theme="Western Region Activation"
                                    data-attendees="Students from Western Region">
                                Kakamega Chapter - Mar 5
                            </button>
                            <button class="w-full text-left px-3 py-2 text-sm text-gray-600 hover:text-orange-600 hover:bg-gray-50 rounded-md event-item-btn"
                                    data-title="Eldoret Chapter (Rift Valley)"
                                    data-date="April 9, 2026"
                                    data-venue="TBD"
                                    data-theme="Rift Valley Engagement"
                                    data-attendees="Students from Rift Valley">
                                Eldoret Chapter - Apr 9
                            </button>
                            <button class="w-full text-left px-3 py-2 text-sm text-gray-600 hover:text-orange-600 hover:bg-gray-50 rounded-md event-item-btn"
                                    data-title="Eastern & N.E Chapter"
                                    data-date="April 30, 2026"
                                    data-venue="TBD"
                                    data-theme="Regional Outreach"
                                    data-attendees="Students from Eastern & NE Region">
                                Eastern & N.E - Apr 30
                            </button>
                            <button class="w-full text-left px-3 py-2 text-sm text-gray-600 hover:text-orange-600 hover:bg-gray-50 rounded-md event-item-btn"
                                    data-title="Central Kenya Chapter (Nyeri)"
                                    data-date="May 13, 2026"
                                    data-venue="TBD"
                                    data-theme="Mountain Region Launch"
                                    data-attendees="Students from Central Region">
                                Central Kenya - May 13
                            </button>
                            <button class="w-full text-left px-3 py-2 text-sm text-orange-600 hover:text-orange-700 hover:bg-orange-50 rounded-md font-semibold event-item-btn"
                                    data-title="ODM COMRADES CHAPTER MEGALAUNCH"
                                    data-date="May 29, 2026"
                                    data-venue="TBD"
                                    data-theme="National Launch"
                                    data-attendees="All Chapters">
                                MEGALAUNCH - May 29
                            </button>
                            <button class="w-full text-left px-3 py-2 text-sm text-gray-600 hover:text-orange-600 hover:bg-gray-50 rounded-md event-item-btn"
                                    data-title="Kisii & Nyamira Chapter"
                                    data-date="June 19, 2026"
                                    data-venue="TBD"
                                    data-theme="Regional Activation"
                                    data-attendees="Students from Kisii & Nyamira">
                                Kisii & Nyamira - Jun 19
                            </button>
                        </div>
                    </div>
                    
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
                        <div class="slide absolute inset-0 bg-cover bg-no-repeat" style="background-image: url('{{ asset('images/ggg.jpeg') }}'); background-position: center 20%; filter: brightness(1.1) contrast(1.1) saturate(1.2); opacity: 0; transition: opacity 4s ease-in-out;"></div>
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
            <section id="leadership" class="py-24 bg-[#0a0f1c] relative overflow-hidden">
                <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
                    <h2 class="text-4xl md:text-5xl font-bold text-center mb-20 text-white tracking-tight">
                        Our Leadership
                    </h2>
                    <div class="flex flex-wrap justify-center gap-10">
                        <!-- Leader 1: Raila Amolo Odinga -->
                        <div class="relative w-full md:w-80 h-[500px] rounded-[2rem] overflow-hidden group border border-white/5 transition-all duration-700 hover:scale-[1.02] cursor-pointer bg-slate-900">
                            <img src="{{ asset('images/Raila Amolo Odinga- Party leader.jpeg') }}" alt="Party Leader" class="absolute inset-0 w-full h-full object-cover transition-transform duration-1000 group-hover:scale-110">
                            <div class="absolute inset-0 bg-black/40 group-hover:bg-black/20 transition-colors duration-700"></div>
                            
                            <!-- Info Overlay -->
                            <div class="absolute bottom-0 w-full p-8 bg-black/60 backdrop-blur-md border-t border-white/10 transform translate-y-2 group-hover:translate-y-0 transition-transform duration-700 ease-out">
                                <h3 class="text-white text-3xl font-bold mb-2 font-sans">Raila Amolo Odinga</h3>
                                <div class="flex items-center gap-2 mb-4">
                                    <div class="w-10 h-0.5 bg-orange-500"></div>
                                    <p class="text-orange-500 font-bold uppercase tracking-widest text-xs">Party Leader</p>
                                </div>
                                <p class="text-gray-300 text-sm italic leading-relaxed opacity-0 group-hover:opacity-100 transition-opacity duration-700 delay-100">
                                    "We stand firm in our resolve to build a democratic and inclusive nation."
                                </p>
                            </div>
                        </div>

                        <!-- Leader 2: Hon. Oduor Ongwen -->
                        <div class="relative w-full md:w-80 h-[500px] rounded-[2rem] overflow-hidden group border border-white/5 transition-all duration-700 hover:scale-[1.02] cursor-pointer bg-slate-900">
                            <img src="{{ asset('images/Hon. Oduor Ongwen- Executive Director ODM party.jpeg') }}" alt="Executive Director" class="absolute inset-0 w-full h-full object-cover transition-transform duration-1000 group-hover:scale-110">
                            <div class="absolute inset-0 bg-black/40 group-hover:bg-black/20 transition-colors duration-700"></div>
                            
                            <div class="absolute bottom-0 w-full p-8 bg-black/60 backdrop-blur-md border-t border-white/10 transform translate-y-2 group-hover:translate-y-0 transition-transform duration-700 ease-out">
                                <h3 class="text-white text-3xl font-bold mb-2 font-sans">Hon. Oduor Ongwen</h3>
                                <div class="flex items-center gap-2 mb-4">
                                    <div class="w-10 h-0.5 bg-blue-500"></div>
                                    <p class="text-blue-500 font-bold uppercase tracking-widest text-xs">Executive Director</p>
                                </div>
                                <p class="text-gray-300 text-sm italic leading-relaxed opacity-0 group-hover:opacity-100 transition-opacity duration-700 delay-100">
                                    "The party remains the engine of progressive change and strategic mobilization."
                                </p>
                            </div>
                        </div>

                        <!-- Leader 3: Hon. Gerald Owuor -->
                        <div class="relative w-full md:w-80 h-[500px] rounded-[2rem] overflow-hidden group border border-white/5 transition-all duration-700 hover:scale-[1.02] cursor-pointer bg-slate-900">
                            <img src="{{ asset('images/ODM_Comrades_Chapter_National_Chairperson_Gerald_Ogalo.jpeg') }}" alt="National Chairperson" class="absolute inset-0 w-full h-full object-cover transition-transform duration-1000 group-hover:scale-110">
                            <div class="absolute inset-0 bg-black/40 group-hover:bg-black/20 transition-colors duration-700"></div>
                            
                            <div class="absolute bottom-0 w-full p-8 bg-black/60 backdrop-blur-md border-t border-white/10 transform translate-y-2 group-hover:translate-y-0 transition-transform duration-700 ease-out">
                                <h3 class="text-white text-3xl font-bold mb-2 font-sans">Hon. Gerald Owuor</h3>
                                <div class="flex items-center gap-2 mb-4">
                                    <div class="w-10 h-0.5 bg-orange-500"></div>
                                    <p class="text-orange-500 font-bold uppercase tracking-widest text-xs">National Chairperson</p>
                                </div>
                                <p class="text-gray-300 text-sm italic leading-relaxed opacity-0 group-hover:opacity-100 transition-opacity duration-700 delay-100">
                                    "Comradeship is the heartbeat of our movement and youth empowerment."
                                </p>
                            </div>
                        </div>

                        <!-- Leader 4: Hannington Oguk -->
                        <div class="relative w-full md:w-80 h-[500px] rounded-[2rem] overflow-hidden group border border-white/5 transition-all duration-700 hover:scale-[1.02] cursor-pointer bg-slate-900">
                            <img src="{{ asset('images/Hannington_Oguk_Secretary_General_ODM_Comrades_Chapter.jpeg') }}" alt="Secretary General" class="absolute inset-0 w-full h-full object-cover transition-transform duration-1000 group-hover:scale-110">
                            <div class="absolute inset-0 bg-black/40 group-hover:bg-black/20 transition-colors duration-700"></div>
                            
                            <div class="absolute bottom-0 w-full p-8 bg-black/60 backdrop-blur-md border-t border-white/10 transform translate-y-2 group-hover:translate-y-0 transition-transform duration-700 ease-out">
                                <h3 class="text-white text-3xl font-bold mb-2 font-sans">Hannington Oguk</h3>
                                <div class="flex items-center gap-2 mb-4">
                                    <div class="w-10 h-0.5 bg-blue-500"></div>
                                    <p class="text-blue-500 font-bold uppercase tracking-widest text-xs">Secretary General</p>
                                </div>
                                <p class="text-gray-300 text-sm italic leading-relaxed opacity-0 group-hover:opacity-100 transition-opacity duration-700 delay-100">
                                    "Structure and integrity define our path forward as we organize."
                                </p>
                            </div>
                        </div>

                        <!-- Leader 5: Maureen Njoroge -->
                        <div class="relative w-full md:w-80 h-[500px] rounded-[2rem] overflow-hidden group border border-white/5 transition-all duration-700 hover:scale-[1.02] cursor-pointer bg-slate-900">
                            <img src="{{ asset('images/Moh.jpeg') }}" alt="Communication Director" class="absolute inset-0 w-full h-full object-cover transition-transform duration-1000 group-hover:scale-110">
                            <div class="absolute inset-0 bg-black/40 group-hover:bg-black/20 transition-colors duration-700"></div>
                            
                            <div class="absolute bottom-0 w-full p-8 bg-black/60 backdrop-blur-md border-t border-white/10 transform translate-y-2 group-hover:translate-y-0 transition-transform duration-700 ease-out">
                                <h3 class="text-white text-3xl font-bold mb-2 font-sans">Maureen Njoroge</h3>
                                <div class="flex items-center gap-2 mb-4">
                                    <div class="w-10 h-0.5 bg-orange-500"></div>
                                    <p class="text-orange-500 font-bold uppercase tracking-widest text-xs">Communication Director</p>
                                </div>
                                <p class="text-gray-300 text-sm italic leading-relaxed opacity-0 group-hover:opacity-100 transition-opacity duration-700 delay-100">
                                    "We are committed to providing timely, accurate, and transparent information."
                                </p>
                            </div>
                        </div>

                        <!-- Leader 6: Tony (IT Team) -->
                        <div class="relative w-full md:w-80 h-[500px] rounded-[2rem] overflow-hidden group border border-white/10 transition-all duration-700 hover:scale-[1.02] hover:shadow-[0_20px_50px_rgba(100,116,139,0.4)] cursor-pointer">
                            <img src="{{ asset('images/Tony.jpeg') }}" alt="IT Team" class="absolute inset-0 w-full h-full object-cover transition-transform duration-1000 group-hover:scale-110">
                            <div class="absolute inset-0 bg-gradient-to-t from-black/95 via-black/20 to-transparent opacity-60 group-hover:opacity-80 transition-opacity duration-700"></div>
                            
                            <div class="absolute bottom-0 w-full p-6 backdrop-blur-md bg-black/40 border-t border-white/10 transform translate-y-4 group-hover:translate-y-0 transition-transform duration-700 ease-out">
                                <h3 class="text-white text-3xl font-bold mb-1 font-sans drop-shadow-[0_2px_4px_rgba(0,0,0,0.8)]">Tony W. Inganga</h3>
                                <div class="flex items-center gap-2 mb-4">
                                    <div class="w-8 h-0.5 bg-blue-400 shadow-[0_0_10px_skyblue]"></div>
                                    <p class="text-blue-300 font-bold uppercase tracking-[0.2em] text-xs text-shadow-sm">IT Specialist</p>
                                </div>
                                <p class="text-gray-200 text-sm italic leading-relaxed opacity-0 group-hover:opacity-100 transition-opacity duration-700 delay-100 translate-y-2 group-hover:translate-y-0 transform">
                                    "Service to the party and the people is our highest calling in every capacity."
                                </p>
                            </div>
                        </div>

                        <!-- Leader 7: Blank (IT Team) -->
                        <div class="relative w-full md:w-80 h-[500px] rounded-[2rem] overflow-hidden group border border-white/10 transition-all duration-700 hover:scale-[1.02] hover:shadow-[0_20px_50px_rgba(100,116,139,0.4)] cursor-pointer bg-gray-900">
                             <!-- Placeholder Silhouette -->
                             <div class="absolute inset-0 flex items-center justify-center bg-gray-800">
                                <svg class="w-32 h-32 text-gray-700" fill="currentColor" viewBox="0 0 24 24">
                                    <path d="M24 20.993V24H0v-2.996A14.977 14.977 0 0112.004 15c4.904 0 9.26 2.354 11.996 5.993zM16.002 8.999a4 4 0 11-8 0 4 4 0 018 0z" />
                                </svg>
                             </div>
                            
                            <div class="absolute inset-0 bg-gradient-to-t from-black/95 via-transparent to-transparent opacity-80 group-hover:opacity-95 transition-opacity duration-500"></div>
                            
                            <div class="absolute bottom-0 w-full p-6 backdrop-blur-md bg-black/40 border-t border-white/10 transform translate-y-4 group-hover:translate-y-0 transition-transform duration-700 ease-out">
                                <h3 class="text-white text-3xl font-bold mb-1 font-sans drop-shadow-[0_2px_4px_rgba(0,0,0,0.8)]">Evans Atula</h3>
                                <div class="flex items-center gap-2 mb-4">
                                    <div class="w-8 h-0.5 bg-gray-500 shadow-[0_0_10px_gray]"></div>
                                    <p class="text-gray-400 font-bold uppercase tracking-[0.2em] text-xs text-shadow-sm">IT Specialist</p>
                                </div>
                                <p class="text-gray-200 text-sm italic leading-relaxed opacity-0 group-hover:opacity-100 transition-opacity duration-700 delay-100 translate-y-2 group-hover:translate-y-0 transform">
                                    "Unity and discipline within the party are the pillars of our strength."
                                </p>
                            </div>
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
                    <div class="flex flex-wrap justify-center mb-8 gap-2 sm:gap-4">
                        <button class="filter-btn px-4 sm:px-6 py-2 rounded-full bg-orange-500 text-white font-medium text-sm sm:text-base transition-colors duration-300 whitespace-nowrap" data-filter="all">All Photos</button>
                        <button class="filter-btn px-4 sm:px-6 py-2 rounded-full bg-gray-200 text-gray-700 font-medium text-sm sm:text-base hover:bg-gray-300 transition-colors duration-300 whitespace-nowrap" data-filter="celebrations">Celebrations</button>
                        <button class="filter-btn px-4 sm:px-6 py-2 rounded-full bg-gray-200 text-gray-700 font-medium text-sm sm:text-base hover:bg-gray-300 transition-colors duration-300 whitespace-nowrap" data-filter="leadership">Leadership</button>
                    </div>
                    
                    <!-- Modern Masonry Gallery -->
                    <div class="masonry-gallery" id="celebration-gallery">
                        <!-- Gallery Item 1 - Large -->
                        <div class="gallery-item opacity-0 transform scale-95 transition-all duration-700 ease-out" data-category="celebrations">
                            <div class="relative group overflow-hidden rounded-lg shadow-lg hover:shadow-2xl transition-all duration-500 cursor-pointer">
                                <img src="{{ asset('images/ODM_Comrades_Chapter_ODM_20th_Celebrations_Mombasa_15_November_2025(1).jpeg') }}" alt="ODM 20th Celebrations" class="w-full h-64 object-cover transition-transform duration-500 group-hover:scale-110">
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
                                <img src="{{ asset('images/ODM_Comrades_Chapter_ODM_20th_Celebrations_Mombasa_15_November_2025(2).jpeg') }}" alt="Leadership Address" class="w-full h-64 object-cover transition-transform duration-500 group-hover:scale-110">
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
                                <img src="{{ asset('images/ODM_Comrades_Chapter_ODM_20th_Celebrations_Mombasa_15_November_2025(3).jpeg') }}" alt="Supporters" class="w-full h-64 object-cover transition-transform duration-500 group-hover:scale-110">
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
                                <img src="{{ asset('images/ODM_Comrades_Chapter_ODM_20th_Celebrations_Mombasa_15_November_2025(4).jpeg') }}" alt="Main Event" class="w-full h-64 object-cover transition-transform duration-500 group-hover:scale-110">
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
                                <img src="{{ asset('images/ODM_Comrades_Chapter_ODM_20th_Celebrations_Mombasa_15_November_2025(6).jpeg') }}" alt="Crowd" class="w-full h-64 object-cover transition-transform duration-500 group-hover:scale-110">
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
                                <img src="{{ asset('images/ODM_Comrades_Chapter_ODM_20th_Celebrations_Mombasa_15_November_2025(7).jpeg') }}" alt="Party Unity" class="w-full h-64 object-cover transition-transform duration-500 group-hover:scale-110">
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
                                <video controls class="w-full h-64 object-cover transition-transform duration-500 group-hover:scale-105" poster="{{ asset('images/ODM_Comrades_Chapter_ODM_20th_Celebrations_Mombasa_15_November_2025(1).jpeg') }}">
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
                    <div class="flex flex-wrap justify-center mb-8 gap-2 sm:gap-4">
                        <button class="campus-filter-btn px-4 sm:px-6 py-2 rounded-full bg-orange-500 text-white font-medium text-sm sm:text-base transition-colors duration-300 whitespace-nowrap" data-filter="all">All Photos</button>
                        <button class="campus-filter-btn px-4 sm:px-6 py-2 rounded-full bg-gray-200 text-gray-700 font-medium text-sm sm:text-base hover:bg-gray-300 transition-colors duration-300 whitespace-nowrap" data-filter="engagement">Engagement</button>
                        <button class="campus-filter-btn px-4 sm:px-6 py-2 rounded-full bg-gray-200 text-gray-700 font-medium text-sm sm:text-base hover:bg-gray-300 transition-colors duration-300 whitespace-nowrap" data-filter="tournament">Tournament</button>
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
                                <img src="{{ asset('images/ODM_Comrades_Chapter_Campus_Engagement_and_Tournament_Multimedia_University_07_November_2025(2).jpeg') }}" alt="Tournament" class="w-full h-64 object-cover transition-transform duration-500 group-hover:scale-110">
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
                                <img src="{{ asset('images/ODM_Comrades_Chapter_Campus_Engagement_and_Tournament_Multimedia_University_07_November_2025(3).jpeg') }}" alt="Campus Event" class="w-full h-64 object-cover transition-transform duration-500 group-hover:scale-110">
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
                                <img src="{{ asset('images/ODM_Comrades_Chapter_Campus_Engagement_and_Tournament_Multimedia_University_07_November_2025(4).jpeg') }}" alt="Competition" class="w-full h-64 object-cover transition-transform duration-500 group-hover:scale-110">
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
                                <img src="{{ asset('images/ODM_Comrades_Chapter_Campus_Engagement_and_Tournament_Multimedia_University_07_November_2025(5).jpeg') }}" alt="Students" class="w-full h-64 object-cover transition-transform duration-500 group-hover:scale-110">
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
                                <img src="{{ asset('images/ODM_Comrades_Chapter_Campus_Engagement_and_Tournament_Multimedia_University_07_November_2025(6).jpeg') }}" alt="Tournament Event" class="w-full h-64 object-cover transition-transform duration-500 group-hover:scale-110">
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
                                <img src="{{ asset('images/ODM_Comrades_Chapter_Campus_Engagement_and_Tournament_Multimedia_University_07_November_2025(7).jpeg') }}" alt="Campus Activity" class="w-full h-64 object-cover transition-transform duration-500 group-hover:scale-110">
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
                            <img src="{{ asset('images/logo.jpeg') }}" alt="ODM Comrades Chapter Logo" class="h-12 w-auto opacity-90 rounded">
                        </div>
                    </div>
                    
                    <!-- Quick Links Section -->
                    <div class="space-y-4">
                        <h3 class="text-white text-lg font-bold" style="color: #ffffff;">Quick Links</h3>
                        <ul class="space-y-2">
                            <li><a href="#" class="text-white/90 hover:text-white text-sm transition-colors" style="color: rgba(255,255,255,0.9);">About Us</a></li>
                            <li><a href="#leadership" class="text-white/90 hover:text-white text-sm transition-colors" style="color: rgba(255,255,255,0.9);">Our Leadership</a></li>
                            <li><a href="#" class="text-white/90 hover:text-white text-sm transition-colors" style="color: rgba(255,255,255,0.9);">Party Manifesto</a></li>
                            <li><a href="#celebrations" class="text-white/90 hover:text-white text-sm transition-colors" style="color: rgba(255,255,255,0.9);">News & Events</a></li>
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
                                odmcomradeschapter@gmail.com
                            </p>
                            <p class="text-white/90 text-sm" style="color: rgba(255,255,255,0.9);">
                                <strong>Phone:</strong><br>
                                +254-710-852-283
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
                            <!-- Facebook -->
                            <a href="https://www.facebook.com/profile.php?id=61580671413201" target="_blank" rel="noopener noreferrer" class="text-white/90 hover:text-white transition-colors hover:scale-110" style="color: rgba(255,255,255,0.9);">
                                <svg class="h-5 w-5" fill="currentColor" viewBox="0 0 24 24">
                                    <path d="M24 12.073c0-6.627-5.373-12-12-12s-12 5.373-12 12c0 5.99 4.388 10.954 10.125 11.854v-8.385H7.078v-3.47h3.047V9.43c0-3.007 1.792-4.669 4.533-4.669 1.312 0 2.686.235 2.686.235v2.953H15.83c-1.491 0-1.956.925-1.956 1.874v2.25h3.328l-.532 3.47h-2.796v8.385C19.612 23.027 24 18.062 24 12.073z"/>
                                </svg>
                            </a>
                            <!-- TikTok -->
                            <a href="https://tiktok.com/@odm.comrades.chap" target="_blank" rel="noopener noreferrer" class="text-white/90 hover:text-white transition-colors hover:scale-110" style="color: rgba(255,255,255,0.9);">
                                <svg class="h-5 w-5" fill="currentColor" viewBox="0 0 24 24">
                                    <path d="M19.59 6.69a4.83 4.83 0 0 1-3.77-4.25V2h-3.45v13.67a2.89 2.89 0 0 1-5.2 1.74 2.89 2.89 0 0 1 2.31-4.64 2.93 2.93 0 0 1 .88.13V9.4a6.84 6.84 0 0 0-1-.05A6.33 6.33 0 0 0 5 20.1a6.34 6.34 0 0 0 10.86-4.43v-7a8.16 8.16 0 0 0 4.77 1.52v-3.4a4.85 4.85 0 0 1-1-.1z"/>
                                </svg>
                            </a>
                            <!-- Twitter/X -->
                            <a href="https://x.com/OdmChapter57930?t=mz1SiSvW2qolvlN04CZf5Q&s=08" target="_blank" rel="noopener noreferrer" class="text-white/90 hover:text-white transition-colors hover:scale-110" style="color: rgba(255,255,255,0.9);">
                                <svg class="h-5 w-5" fill="currentColor" viewBox="0 0 24 24">
                                    <path d="M18.244 2.25h3.308l-7.227 8.26 8.502 11.24H16.17l-5.214-6.817L4.99 21.75H1.68l7.73-8.835L1.254 2.25H8.08l4.713 6.231zm-1.161 17.52h1.833L7.084 4.126H5.117z"/>
                                </svg>
                            </a>
                            <!-- WhatsApp -->
                            <a href="https://whatsapp.com/channel/0029VbBJPq8F1YlUUedx5X2G" target="_blank" rel="noopener noreferrer" class="text-white/90 hover:text-white transition-colors hover:scale-110" style="color: rgba(255,255,255,0.9);">
                                <svg class="h-5 w-5" fill="currentColor" viewBox="0 0 24 24">
                                    <path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 01-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 01-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 012.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0012.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 005.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893a11.821 11.821 0 00-3.48-8.413Z"/>
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
                // Mobile Menu Toggle
                const mobileMenuButton = document.getElementById('mobile-menu-button');
                const mobileMenu = document.getElementById('mobile-menu');

                if (mobileMenuButton && mobileMenu) {
                    mobileMenuButton.addEventListener('click', function() {
                        mobileMenu.classList.toggle('hidden');
                    });
                }

                // Events Dropdown Toggle
                const eventsButton = document.getElementById('events-button');
                const eventsMenu = document.getElementById('events-menu');
                const eventsArrow = document.getElementById('events-arrow');

                if (eventsButton && eventsMenu) {
                    eventsButton.addEventListener('click', (e) => {
                        e.stopPropagation();
                        // Close lightbox if open
                        const lightbox = document.querySelector('.lightbox-modal');
                        if (lightbox && lightbox.style.display === 'block') {
                            lightbox.style.display = 'none';
                        }
                        
                        const isHidden = eventsMenu.classList.contains('hidden');
                        
                        if (isHidden) {
                            eventsMenu.classList.remove('hidden');
                            setTimeout(() => {
                                eventsMenu.classList.remove('opacity-0', 'scale-95');
                                eventsMenu.classList.add('opacity-100', 'scale-100');
                                eventsArrow.classList.add('rotate-180');
                            }, 10);
                        } else {
                            eventsMenu.classList.remove('opacity-100', 'scale-100');
                            eventsMenu.classList.add('opacity-0', 'scale-95');
                            eventsArrow.classList.remove('rotate-180');
                            setTimeout(() => {
                                eventsMenu.classList.add('hidden');
                            }, 200);
                        }
                    });

                    // Close dropdown when clicking outside
                    document.addEventListener('click', (e) => {
                        if (!eventsButton.contains(e.target) && !eventsMenu.contains(e.target)) {
                            eventsMenu.classList.remove('opacity-100', 'scale-100');
                            eventsMenu.classList.add('opacity-0', 'scale-95');
                            eventsArrow.classList.remove('rotate-180');
                            setTimeout(() => {
                                eventsMenu.classList.add('hidden');
                            }, 200);
                        }
                    });
                }
                
                // Event Modal Functionality
                const eventModal = document.getElementById('event-modal');
                const eventModalClose = document.getElementById('event-modal-close');
                const eventBtns = document.querySelectorAll('.event-item-btn');
                
                if (eventModal && eventBtns.length > 0) {
                    // Open Modal
                    eventBtns.forEach(btn => {
                        btn.addEventListener('click', function(e) {
                            e.stopPropagation(); // Prevent closing dropdown immediately
                            
                            // Get data
                            const title = this.getAttribute('data-title');
                            const date = this.getAttribute('data-date');
                            const venue = this.getAttribute('data-venue');
                            const theme = this.getAttribute('data-theme');
                            const attendees = this.getAttribute('data-attendees');
                            
                            // Populate Modal
                            document.getElementById('modal-event-title').textContent = title;
                            document.getElementById('modal-event-date').textContent = date;
                            document.getElementById('modal-event-venue').textContent = venue || 'TBD';
                            document.getElementById('modal-event-theme').textContent = theme || 'No theme specified';
                            document.getElementById('modal-event-attendees').textContent = attendees || 'TBD';
                            
                            // Show Modal
                            eventModal.classList.remove('hidden');
                            // Close dropdown
                            eventsMenu.classList.remove('opacity-100', 'scale-100');
                            eventsMenu.classList.add('opacity-0', 'scale-95');
                            eventsArrow.classList.remove('rotate-180');
                            setTimeout(() => {
                                eventsMenu.classList.add('hidden');
                            }, 200);
                        });
                    });
                    
                    // Close Modal
                    eventModalClose.addEventListener('click', function() {
                        eventModal.classList.add('hidden');
                    });
                    
                    // Close on outside click
                    eventModal.addEventListener('click', function(e) {
                        if (e.target === eventModal) {
                            eventModal.classList.add('hidden');
                        }
                    });
                }
                
                
                // Mobile Events Toggle
                const mobileEventsToggle = document.getElementById('mobile-events-toggle');
                const mobileEventsList = document.getElementById('mobile-events-list');
                const mobileEventsArrow = document.getElementById('mobile-events-arrow');
                
                if (mobileEventsToggle && mobileEventsList) {
                    mobileEventsToggle.addEventListener('click', function() {
                        const isHidden = mobileEventsList.classList.contains('hidden');
                        
                        if (isHidden) {
                            mobileEventsList.classList.remove('hidden');
                            mobileEventsArrow.classList.add('rotate-180');
                        } else {
                            mobileEventsList.classList.add('hidden');
                            mobileEventsArrow.classList.remove('rotate-180');
                        }
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
                column-gap: 1rem;
                width: 100%;
                max-width: 100%;
                overflow: hidden;
            }
            
            .gallery-item {
                break-inside: avoid;
                margin-bottom: 1rem;
                width: 100%;
                box-sizing: border-box;
            }
            
            @media (min-width: 640px) {
                .masonry-gallery {
                    column-count: 2;
                    column-gap: 1.25rem;
                }
            }
            
            @media (min-width: 1024px) {
                .masonry-gallery {
                    column-count: 3;
                    column-gap: 1.5rem;
                }
            }
            
            @media (min-width: 1280px) {
                .masonry-gallery {
                    column-count: 4;
                    column-gap: 1.5rem;
                }
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
                background-color: rgba(0, 0, 0, 0.9);
                overflow: hidden;
            }
            
            /* Event Modal Animation */
            #event-modal:not(.hidden) {
                display: flex;
                animation: fadeIn 0.3s ease-out;
            }

            
            .lightbox-content {
                position: relative;
                margin: auto;
                padding: 0;
                width: 90%;
                height: 90%;
                max-width: 1200px;
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
                right: 35px;
                color: #f1f1f1;
                font-size: 40px;
                font-weight: bold;
                cursor: pointer;
                z-index: 10000;
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
        <!-- Event Details Modal -->
        <div id="event-modal" class="hidden fixed inset-0 z-[60] bg-gray-900/40 flex items-center justify-center p-4">
            <div class="bg-white rounded-2xl shadow-2xl w-full max-w-md overflow-hidden transform transition-all scale-100 relative">
                <!-- Modal Header -->
                <div class="bg-gradient-to-r from-orange-500 to-red-600 p-6 relative">
                    <button id="event-modal-close" class="absolute top-4 right-4 text-white/80 hover:text-white transition-colors">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path></svg>
                    </button>
                    <h3 id="modal-event-title" class="text-2xl font-bold text-white mb-1 drop-shadow-md">Event Title</h3>
                    <div class="flex items-center text-orange-100 text-sm font-medium">
                        <svg class="w-4 h-4 mr-1.5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"></path></svg>
                        <span id="modal-event-date">Date</span>
                    </div>
                </div>
                
                <!-- Modal Body -->
                <div class="p-6 space-y-6">
                    <!-- Venue -->
                    <div>
                        <h4 class="text-xs font-bold text-gray-400 uppercase tracking-wider mb-1">Venue</h4>
                        <div class="flex items-start text-gray-800">
                            <svg class="w-5 h-5 text-orange-500 mr-2 mt-0.5 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"></path><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"></path></svg>
                            <span id="modal-event-venue" class="font-medium">Venue Name</span>
                        </div>
                    </div>
                    
                    <!-- Theme -->
                    <div>
                        <h4 class="text-xs font-bold text-gray-400 uppercase tracking-wider mb-1">Theme</h4>
                        <div class="p-3 bg-orange-50 border border-orange-100 rounded-lg text-orange-900 text-sm font-medium italic">
                            <span id="modal-event-theme">Event Theme</span>
                        </div>
                    </div>

                    <!-- Attendees -->
                     <div>
                        <h4 class="text-xs font-bold text-gray-400 uppercase tracking-wider mb-1">Attendees</h4>
                        <div class="flex items-start text-gray-700 text-sm">
                            <svg class="w-5 h-5 text-blue-500 mr-2 mt-0.5 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4.354a4 4 0 110 5.292M15 21H3v-1a6 6 0 0112 0v1zm0 0h6v-1a6 6 0 00-9-5.197M13 7a4 4 0 11-8 0 4 4 0 018 0z"></path></svg>
                            <span id="modal-event-attendees">Target Attendees</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        

    </body>
</html>
