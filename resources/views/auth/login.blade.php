<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
    <title>Log In - ODM Comrades Chapter</title>
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
<body class="bg-gradient-to-br from-orange-50 via-white to-blue-50 min-h-screen">
    <!-- Navigation Bar -->
    <nav class="bg-white border-b border-gray-200 sticky top-0 z-50">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex justify-between h-16">
                <div class="flex flex-1 items-center">
                    <!-- Logo / Brand Name -->
                    <a href="{{ url('/') }}" class="text-lg sm:text-2xl font-bold text-orange-600 tracking-tight flex items-center gap-2 sm:gap-3">
                        <img src="{{ asset('images/logo.jpeg') }}" alt="ODM Logo" class="h-8 w-8 sm:h-10 sm:w-10 object-contain">
                        <span class="text-blue-900 hidden sm:inline">ODM</span> 
                        <span class="text-blue-900">Comrades Chapter</span>
                    </a>
                </div>
                <div class="flex items-center space-x-2 sm:space-x-4">
                    <a href="{{ url('/') }}" class="text-xs sm:text-sm font-medium text-gray-700 hover:text-orange-600">Home</a>
                    <a href="{{ route('register') }}" class="text-xs sm:text-sm font-medium text-gray-700 hover:text-orange-600">Register</a>
                </div>
            </div>
        </div>
    </nav>
    
    <div class="min-h-screen flex">
        <!-- Left Side - Branding -->
        <div class="hidden lg:flex lg:w-1/2 bg-gradient-to-br from-orange-600 to-orange-800 relative">
            <div class="absolute inset-0 bg-black/10"></div>
            <div class="relative z-10 flex flex-col justify-center px-12 text-white">
                <div class="mb-8">
                    <img src="{{ asset('images/odmlogo.png') }}" alt="ODM Logo" class="h-16 w-auto mb-6">
                    <h1 class="text-3xl font-bold mb-4">Welcome Back</h1>
                    <p class="text-lg text-orange-100 mb-6">ODM Comrades Chapter</p>
                    <p class="text-orange-200">
                        Empowering the youth and comrades through the Orange Democratic Movement. 
                        Join us in championing for reputable leadership, inclusivity, and progressive change.
                    </p>
                </div>
                
                <div class="space-y-3">
                    <div class="flex items-center space-x-3">
                        <div class="w-2 h-2 bg-orange-300 rounded-full"></div>
                        <span class="text-orange-100">Democratic Leadership</span>
                    </div>
                    <div class="flex items-center space-x-3">
                        <div class="w-2 h-2 bg-orange-300 rounded-full"></div>
                        <span class="text-orange-100">Youth Empowerment</span>
                    </div>
                    <div class="flex items-center space-x-3">
                        <div class="w-2 h-2 bg-orange-300 rounded-full"></div>
                        <span class="text-orange-100">Progressive Change</span>
                    </div>
                </div>
            </div>
        </div>
        
        <!-- Right Side - Login Form -->
        <div class="w-full lg:w-1/2 flex items-center justify-center px-4 sm:px-6 lg:px-12 py-12">
            <div class="max-w-md w-full">
                <div class="text-center mb-8">
                    <img src="{{ asset('images/odmlogo.png') }}" alt="ODM Logo" class="h-12 w-auto mx-auto mb-4 lg:hidden">
                    <h2 class="text-3xl font-bold text-gray-900 mb-2">Log In</h2>
                    <p class="text-gray-600">Access your ODM Comrades Chapter account</p>
                </div>
                
                <div class="bg-white rounded-lg shadow-lg p-8">
                    <form class="space-y-6" action="{{ route('login') }}" method="POST">
                        @csrf
                        
                        <div class="space-y-4">
                            <div>
                                <label for="phone_number" class="block text-sm font-medium text-gray-700 mb-2">Phone Number</label>
                                <input id="phone_number" name="phone_number" type="text" required class="appearance-none relative block w-full px-3 py-3 border border-gray-300 placeholder-gray-500 text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-orange-500 focus:border-orange-500 sm:text-sm" placeholder="Enter your phone number">
                            </div>
                            
                            <div>
                                <label for="password" class="block text-sm font-medium text-gray-700 mb-2">Password</label>
                                <input id="password" name="password" type="password" required class="appearance-none relative block w-full px-3 py-3 border border-gray-300 placeholder-gray-500 text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-orange-500 focus:border-orange-500 sm:text-sm" placeholder="Enter your password">
                            </div>
                        </div>

                        @if ($errors->any())
                            <div class="bg-red-50 border border-red-200 text-red-600 text-sm p-4 rounded-md">
                                @foreach ($errors->all() as $error)
                                    <p>{{ $error }}</p>
                                @endforeach
                            </div>
                        @endif

                        <div>
                            <button type="submit" class="group relative w-full flex justify-center py-3 px-4 border border-transparent text-sm font-medium rounded-md text-white hover:bg-orange-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-orange-500" style="background-color: #fb923c;">
                                Log In
                            </button>
                        </div>
                        
                        <div class="text-center">
                            <a href="{{ route('register') }}" class="font-medium text-orange-600 hover:text-orange-500">
                                Don't have an account? Register
                            </a>
                        </div>
                    </form>
                </div>
                
                <!-- Footer -->
                <div class="mt-8 text-center text-sm text-gray-500">
                    <p>&copy; {{ date('Y') }} ODM Comrades Chapter. All rights reserved.</p>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
