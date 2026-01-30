<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
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
</head>
<body class="h-screen overflow-hidden">
    <!-- Full Screen Hero Section with Chungwa Image -->
    <section class="relative h-full w-full">
        <div class="absolute inset-0 z-0">
            <img src="{{ asset('images/chungwa1.webp') }}" alt="ODM Chungwa" class="w-full h-full object-cover">
            <div class="absolute inset-0 bg-gradient-to-br from-black/70 via-black/60 to-orange-900/60"></div>
        </div>
        
        <!-- Hero Content - Centered -->
        <div class="relative z-10 h-full w-full flex items-center justify-center">
            <div class="text-center px-4">
                <h1 class="text-4xl tracking-tight font-extrabold sm:text-5xl md:text-6xl lg:text-7xl mb-6">
                    <span class="block" style="color: #fb923c;">ODM Membership Registration</span>
                </h1>
                <p class="mt-3 max-w-3xl mx-auto text-xl sm:text-2xl md:text-3xl md:mt-5 text-white mb-12">
                    To become an ODM member
                </p>
                
                <div class="space-y-8">
                    <div class="text-center">
                        <p class="text-white text-2xl font-semibold mb-2">Dial</p>
                        <p class="text-white text-4xl md:text-5xl font-bold">*483*036#</p>
                    </div>
                    
                    <div class="text-3xl md:text-4xl font-bold" style="color: #fb923c;">OR</div>
                    
                    <a href="{{ route('register') }}" class="inline-flex items-center px-12 py-4 text-lg md:text-xl font-medium rounded-xl text-white hover:bg-blue-700 transition duration-150 ease-in-out transform hover:scale-105" style="background-color: #1e40af; border: 2px solid #fb923c;">
                        Become a Member Today
                    </a>
                </div>
            </div>
        </div>
    </section>
</body>
</html>
