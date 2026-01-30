<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
    <title>ODM Membership Registration</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        orange: {
                            500: '#f97316',
                            600: '#ea580c',
                            700: '#c2410c',
                        },
                        blue: {
                            900: '#1e3a8a',
                        }
                    }
                }
            }
        }
    </script>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }
        html, body {
            width: 100%;
            overflow-x: hidden;
        }
    </style>
</head>
<body class="h-screen overflow-hidden">
    <!-- Full Screen Hero Section with Chungwa Image -->
    <section class="relative h-full w-full max-w-full">
        <div class="absolute inset-0 z-0">
            <img src="{{ asset('images/chungwa1.webp') }}" alt="ODM Chungwa" class="w-full h-full object-cover">
            <div class="absolute inset-0 bg-gradient-to-br from-black/70 via-black/60 to-orange-900/60"></div>
        </div>
        
        <!-- Hero Content - Centered -->
        <div class="relative z-10 h-screen w-full max-w-full flex items-center justify-center px-3 sm:px-6">
            <div class="text-center max-w-full mx-auto h-full flex flex-col justify-center">
                <h1 class="text-xl sm:text-2xl md:text-3xl lg:text-4xl xl:text-5xl font-extrabold mb-2 sm:mb-3 px-2">
                    <span class="block" style="color: #fb923c;">ODM Membership Registration</span>
                </h1>
                <p class="mt-1 text-xs sm:text-sm md:text-base lg:text-lg xl:text-xl text-white mb-3 sm:mb-4 px-2">
                    To become an ODM member
                </p>
                
                <div class="space-y-3 sm:space-y-4 px-2">
                    <div class="text-center">
                        <p class="text-white text-base sm:text-lg md:text-xl lg:text-2xl font-semibold mb-1">Dial</p>
                        <p class="text-white text-lg sm:text-xl md:text-2xl lg:text-3xl font-bold">*483*036#</p>
                    </div>
                    
                    <div class="text-white text-base sm:text-lg md:text-xl lg:text-2xl font-bold">OR</div>
                    
                    <a href="{{ route('register') }}" class="inline-flex items-center px-3 sm:px-4 lg:px-6 py-2 sm:py-2 border border-transparent text-xs sm:text-sm lg:text-base font-medium rounded-xl text-white hover:bg-orange-600 transition duration-150 ease-in-out transform hover:scale-105" style="background-color: #fb923c;">
                        Become a Member Today
                    </a>
                </div>
            </div>
        </div>
    </section>
</body>
</html>
