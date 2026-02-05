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
        <div class="relative z-10 h-full w-full flex items-center justify-center px-4 sm:px-6">
            <div class="text-center max-w-4xl mx-auto">
                <h1 class="text-3xl sm:text-4xl md:text-5xl lg:text-6xl xl:text-7xl font-extrabold mb-4 sm:mb-6">
                    <span class="block" style="color: #fb923c;">ODM Membership Registration</span>
                </h1>
                <p class="mt-3 text-lg sm:text-xl md:text-2xl lg:text-3xl text-white mb-8 sm:mb-12">
                    To become an ODM Comrades Chapter member
                </p>
                
                
                <div class="space-y-6 sm:space-y-8">
                    <!-- <div class="text-center">
                        <p class="text-white text-xl sm:text-2xl font-semibold mb-4">Dial</p>
                        <p class="text-white text-3xl sm:text-4xl md:text-5xl font-bold">*483*036#</p>
                    </div>
                    
                    <div class="text-white text-2xl sm:text-3xl md:text-4xl font-bold">OR</div> -->
                    
                    <a href="{{ route('register') }}" class="inline-flex items-center px-6 sm:px-8 lg:px-12 py-3 sm:py-4 border border-transparent text-base sm:text-lg lg:text-xl font-medium rounded-xl text-white hover:bg-orange-600 transition duration-150 ease-in-out transform hover:scale-105" style="background-color: #fb923c;">
                        Clik to Register
                    </a>
                </div>
            </div>
        </div>
    </section>
</body>
</html>
