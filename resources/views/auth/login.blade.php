<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
    <title>Log In - ODM Comrades Chapter</title>
    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Outfit:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <!-- Scripts -->
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="https://unpkg.com/lucide@latest"></script>
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    fontFamily: {
                        sans: ['Outfit', 'sans-serif'],
                    },
                    colors: {
                        orange: {
                            500: '#f97316',
                            600: '#ea580c',
                            target: '#fb923c',
                        },
                        blue: {
                            900: '#1e3a8a',
                            950: '#172554',
                        }
                    }
                }
            }
        }
    </script>
    <style>
        .form-card {
            background: #ffffff;
            border: 1px solid #e5e7eb;
            box-shadow: 0 25px 50px -12px rgba(0, 0, 0, 0.25);
        }
        .form-input-icon {
            @apply absolute left-3 top-1/2 -translate-y-1/2 text-gray-400 w-5 h-5;
        }
        .form-input {
            @apply pl-10 w-full rounded-xl border border-gray-200 py-3 focus:ring-2 focus:ring-orange-500 focus:border-orange-500 transition-all outline-none bg-gray-50/50;
        }
    </style>
</head>
<body class="bg-gradient-to-br from-[#FF8C00] to-[#F97316] min-h-screen font-sans selection:bg-blue-900 selection:text-white overflow-x-hidden">
    <!-- Subtle Pattern Overlay -->
    <div class="fixed top-0 left-0 w-full h-full pointer-events-none opacity-10 -z-10" 
         style="background-image: url('https://www.transparenttextures.com/patterns/cubes.png');"></div>

    <div class="min-h-screen flex flex-col items-center justify-center p-4">
        <!-- Brand Header -->
        <div class="w-full max-w-md mb-8 flex flex-col items-center">
            <a href="{{ url('/') }}" class="inline-flex items-center gap-3 group transition-transform hover:scale-105">
                <div class="p-2 bg-white rounded-2xl shadow-xl">
                    <img src="{{ asset('images/odmlogo.png') }}" alt="ODM Logo" class="h-10 w-auto">
                </div>
                <div class="flex flex-col">
                    <span class="text-xl font-bold text-blue-950 tracking-tight">ODM Comrades</span>
                    <span class="text-xs font-bold text-white tracking-wider uppercase">Chapter</span>
                </div>
            </a>
        </div>

        <!-- Login Card -->
        <div class="w-full max-w-md form-card rounded-2xl overflow-hidden anim-fade-up">
            <div class="p-8 sm:p-12">
                <div class="text-center mb-10">
                    <h2 class="text-3xl font-bold text-gray-900 mb-3">Welcome Back</h2>
                    <p class="text-gray-500 font-medium">Access your ODM Comrades account</p>
                </div>

                @if ($errors->any())
                    <div class="mb-8 p-4 bg-red-50 border-l-4 border-red-500 rounded-r-xl">
                        <div class="flex items-start gap-3">
                            <i data-lucide="alert-circle" class="text-red-500 w-5 h-5 shrink-0 mt-0.5"></i>
                            <div>
                                <h4 class="text-sm font-bold text-red-800 mb-1">Login Failed</h4>
                                <ul class="text-sm text-red-700">
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        </div>
                    </div>
                @endif

                <form action="{{ route('login') }}" method="POST" class="space-y-6">
                    @csrf
                    
                    <div class="space-y-5">
                        <div class="relative">
                            <label for="phone_number" class="block text-sm font-semibold text-gray-700 mb-2 ml-1">Phone Number</label>
                            <div class="relative group">
                                <i data-lucide="phone" class="form-input-icon transition-colors group-focus-within:text-orange-500"></i>
                                <input id="phone_number" name="phone_number" type="text" required 
                                       class="form-input" 
                                       placeholder="Enter your phone number">
                            </div>
                        </div>

                        <div class="relative">
                            <label for="password" class="block text-sm font-semibold text-gray-700 mb-2 ml-1">Password</label>
                            <div class="relative group">
                                <i data-lucide="lock" class="form-input-icon transition-colors group-focus-within:text-orange-500"></i>
                                <input id="password" name="password" type="password" required 
                                       class="form-input pr-12" 
                                       placeholder="••••••••">
                                <button type="button" onclick="togglePassword('password', this)" 
                                        class="absolute right-3 top-1/2 -translate-y-1/2 text-gray-400 hover:text-orange-600 transition-colors p-1">
                                    <i data-lucide="eye" class="w-5 h-5"></i>
                                </button>
                            </div>
                        </div>
                    </div>

                    <div class="pt-2">
                        <button type="submit" 
                                class="w-full py-4 px-6 bg-blue-950 rounded-2xl text-white font-bold text-lg shadow-xl shadow-blue-900/20 hover:bg-blue-900 hover:-translate-y-0.5 active:scale-[0.98] transition-all duration-300">
                            Sign In
                        </button>
                    </div>

                    <div class="text-center mt-8">
                        <p class="text-gray-500 font-medium">
                            Don't have an account? 
                            <a href="{{ route('register') }}" class="text-orange-600 hover:text-orange-700 font-bold underline decoration-orange-300 underline-offset-4 decoration-2">
                                Register here
                            </a>
                        </p>
                    </div>
                </form>
            </div>
        </div>

        <!-- Footer -->
        <div class="mt-12 text-center text-gray-500 text-sm">
            <p>&copy; {{ date('Y') }} ODM Comrades Chapter. All rights reserved.</p>
        </div>
    </div>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            lucide.createIcons();
        });

        function togglePassword(inputId, btn) {
            const input = document.getElementById(inputId);
            const icon = btn.querySelector('i');
            
            if (input.type === 'password') {
                input.type = 'text';
                icon.setAttribute('data-lucide', 'eye-off');
            } else {
                input.type = 'password';
                icon.setAttribute('data-lucide', 'eye');
            }
            lucide.createIcons();
        }
    </script>
</body>
</html>
