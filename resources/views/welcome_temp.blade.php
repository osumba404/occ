<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
    
    <!-- SEO Meta Tags -->
    <title>{{ config('app.name', 'ODM Comrades Chapter') }} - Empowering Youth & Students</title>
    <meta name="description" content="Official website of ODM Comrades Chapter. Empowering youth and students through reputable leadership, inclusivity, and progressive change. Join the movement today!">
    <meta name="keywords" content="ODM, Comrades Chapter, ODM Youth, Kenya Politics, Student Leadership, Raila Odinga, ODM Party, University Politics, Youth Empowerment">
    <meta name="author" content="ODM Comrades Chapter">
    <meta name="robots" content="index, follow">
    <link rel="canonical" href="{{ url('/') }}">

    <!-- Open Graph / Facebook -->
    <meta property="og:type" content="website">
    <meta property="og:url" content="{{ url('/') }}">
    <meta property="og:title" content="ODM Comrades Chapter - Empowering Youth & Students">
    <meta property="og:description" content="Join ODM Comrades Chapter. We champion reputable leadership, inclusivity, and progressive change for Kenyan youth and students.">
    <meta property="og:image" content="{{ asset('images/logo.jpeg') }}">

    <!-- Twitter -->
    <meta property="twitter:card" content="summary_large_image">
    <meta property="twitter:url" content="{{ url('/') }}">
    <meta property="twitter:title" content="ODM Comrades Chapter - Empowering Youth & Students">
    <meta property="twitter:description" content="Join ODM Comrades Chapter. We champion reputable leadership, inclusivity, and progressive change for Kenyan youth and students.">
    <meta property="twitter:image" content="{{ asset('images/logo.jpeg') }}">

    <!-- Favicon -->
    <link rel="icon" type="image/jpeg" href="{{ asset('images/logo.jpeg') }}">

    <!-- Structured Data (JSON-LD) -->
    <script type="application/ld+json">
    {
      "@context": "https://schema.org",
      "@type": "Organization",
      "name": "ODM Comrades Chapter",
      "url": "{{ url('/') }}",
      "logo": "{{ asset('images/logo.jpeg') }}",
      "description": "The student and youth wing of the Orange Democratic Movement, dedicated to empowering comrades through progressive leadership.",
      "foundingDate": "2025",
      "founders": [
        {
          "@type": "Person",
          "name": "Raila Amolo Odinga"
        }
      ],
      "sameAs": [
        "https://twitter.com/TheODMparty",
        "https://www.facebook.com/TheODMParty"
      ]
    }
    </script>

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
                    <a href="{{ url('/') }}" class="text-lg sm:text-2xl font-bold text-orange-600 tracking-tight flex items-center gap-1.5 sm:gap-3">
                        <img src="{{ asset('images/logo.jpeg') }}" alt="ODM Logo" class="h-8 w-8 sm:h-10 sm:w-10 object-contain flex-shrink-0">
                        <span class="text-blue-900">ODM</span> 
                        <span class="text-blue-900">Comrades</span>
                        <span class="text-blue-900">Chapter</span>
                    </a>
                </div>
                <!-- Desktop Navigation -->
                <div class="hidden md:flex items-center space-x-4">
                    <a href="#leadership" class="text-sm font-medium text-gray-700 hover:text-orange-600">Leadership</a>
                    <a href="#events" class="text-sm font-medium text-gray-700 hover:text-orange-600">Events</a>
                    <a href="#campus" class="text-sm font-medium text-gray-700 hover:text-orange-600">Campus</a>
                    <a href="#youth" class="text-sm font-medium text-gray-700 hover:text-orange-600">Youth</a>
                    @if (Route::has('register'))
                        @auth
                            <a href="{{ url('/dashboard') }}" class="text-sm font-medium text-gray-700 hover:text-orange-600">Dashboard</a>
                        @else
                            <a href="{{ route('login') }}" class="text-sm font-medium text-gray-700 hover:text-orange-600">Log in</a>
                        @endif
                        
                        @if (Route::has('membership'))
                            <a href="{{ route('membership') }}" class="inline-flex items-center px-4 py-2 border border-transparent text-sm font-medium rounded-md shadow-sm text-white hover:bg-orange-600 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-orange-500" style="background-color: #fb923c;">
                                Register
                            </a>
                        @endif
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
                <a href="#events" class="block px-3 py-2 text-base font-medium text-gray-700 hover:text-orange-600 hover:bg-gray-50 rounded-md">Events</a>
                <a href="#campus" class="block px-3 py-2 text-base font-medium text-gray-700 hover:text-orange-600 hover:bg-gray-50 rounded-md">Campus</a>
                <a href="#youth" class="block px-3 py-2 text-base font-medium text-gray-700 hover:text-orange-600 hover:bg-gray-50 rounded-md">Youth</a>
                @if (Route::has('register'))
                    @auth
                        <a href="{{ url('/dashboard') }}" class="block px-3 py-2 text-base font-medium text-gray-700 hover:text-orange-600 hover:bg-gray-50 rounded-md">Dashboard</a>
                    @else
                        <a href="{{ route('login') }}" class="block px-3 py-2 text-base font-medium text-gray-700 hover:text-orange-600 hover:bg-gray-50 rounded-md">Log in</a>
                    @endif
                    
                    @if (Route::has('membership'))
                        <a href="{{ route('membership') }}" class="block px-3 py-2 text-base font-medium text-white hover:bg-orange-700 rounded-md" style="background-color: #fb923c;">
                            Register
                        </a>
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
                   Empowering youth and comrades through the Orange Democratic Movement. Join the movement to champion for reputable leadership, inclusivity, and progressive change.
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
    </main>

    <!-- Footer -->
    <footer class="bg-gray-800 text-white py-8">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center">
                <p>&copy; {{ date('Y') }} ODM Comrades Chapter. All rights reserved.</p>
                <div class="mt-4 flex justify-center space-x-6">
                    <a href="#" class="text-gray-400 hover:text-white">Privacy Policy</a>
                    <a href="#" class="text-gray-400 hover:text-white">Terms of Service</a>
                    <a href="#" class="text-gray-400 hover:text-white">Contact</a>
                </div>
            </div>
        </div>
    </footer>

    <script>
        // Mobile menu toggle
        const mobileMenuButton = document.getElementById('mobile-menu-button');
        const mobileMenu = document.getElementById('mobile-menu');

        if (mobileMenuButton && mobileMenu) {
            mobileMenuButton.addEventListener('click', () => {
                mobileMenu.classList.toggle('hidden');
            });
        }

        // Slideshow
        let currentSlide = 0;
        const slides = document.querySelectorAll('.slide');
        const totalSlides = slides.length;

        function showSlide(index) {
            slides.forEach((slide, i) => {
                slide.style.opacity = i === index ? '1' : '0';
            });
        }

        function nextSlide() {
            currentSlide = (currentSlide + 1) % totalSlides;
            showSlide(currentSlide);
        }

        // Auto-advance slideshow every 5 seconds
        setInterval(nextSlide, 5000);

        // Show first slide initially
        showSlide(0);
    </script>
</body>
</html>
