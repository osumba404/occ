<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
    <title>Member Login | ODM Comrades Chapter</title>
    
    <!-- Premium Font: Outfit -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Outfit:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">
    
    <!-- Scripts -->
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="https://unpkg.com/lucide@latest"></script>

    <style type="text/css">
        :root {
            --odm-blue: #1e3a8a;
            --odm-orange: #f97316;
            --odm-white: #ffffff;
        }

        body {
            margin: 0;
            padding: 0;
            min-height: 100vh;
            background: var(--odm-white);
            font-family: 'Outfit', sans-serif;
            overflow-x: hidden;
        }

        .page-container {
            display: flex;
            min-height: 100vh;
            width: 100%;
        }

        /* Branding Section - ODM Blue */
        .branding-section {
            flex: 1;
            background: var(--odm-blue);
            display: flex;
            align-items: center;
            justify-content: center;
            position: relative;
            z-index: 10;
            clip-path: polygon(0 0, 100% 0, 85% 100%, 0% 100%);
            padding-right: 5%;
        }

        /* Form Section - Clean White */
        .form-section {
            flex: 1;
            background: var(--odm-white);
            display: flex;
            align-items: center;
            justify-content: center;
            position: relative;
            margin-left: -10%;
            z-index: 5;
        }

        .branding-content {
            text-align: center;
            padding: 2rem;
        }

        .logo-img {
            height: clamp(140px, 25vh, 240px);
            width: auto;
            margin-bottom: 1.5rem;
            filter: drop-shadow(0 10px 20px rgba(0, 0, 0, 0.15));
        }

        .branding-title {
            color: var(--odm-white);
            font-size: 3.5rem;
            font-weight: 800;
            line-height: 1;
            margin-bottom: 0.5rem;
            letter-spacing: -0.02em;
        }

        .branding-title span {
            color: var(--odm-orange);
        }

        .branding-subtitle {
            color: var(--odm-white);
            font-size: 1.25rem;
            font-weight: 700;
            text-transform: uppercase;
            letter-spacing: 0.3em;
            opacity: 0.9;
        }

        /* Login Form Styling */
        .login-container {
            width: 100%;
            max-width: 420px;
            padding: 2rem;
            animation: fadeIn 0.6s ease-out;
        }

        .form-header {
            margin-bottom: 2.5rem;
        }

        .form-header h2 {
            font-size: 2.25rem;
            font-weight: 800;
            color: var(--odm-blue);
            margin-bottom: 0.5rem;
        }

        .form-header p {
            color: #64748b;
            font-size: 1.1rem;
        }

        .input-group {
            margin-bottom: 1.5rem;
        }

        .label-text {
            display: block;
            color: var(--odm-blue);
            font-size: 0.875rem;
            font-weight: 700;
            margin-bottom: 0.5rem;
            margin-left: 0.25rem;
        }

        .input-relative {
            position: relative;
            display: flex;
            align-items: center;
        }

        .input-field {
            width: 100%;
            background: #f8fafc;
            border: 2px solid #e2e8f0;
            border-radius: 12px;
            padding: 0.875rem 1rem 0.875rem 3rem;
            color: var(--odm-blue);
            font-size: 1rem;
            transition: all 0.2s ease;
            outline: none;
        }

        .input-field:focus {
            border-color: var(--odm-blue);
            background: white;
            box-shadow: 0 0 0 4px rgba(30, 58, 138, 0.05);
        }

        .input-icon {
            position: absolute;
            left: 1rem;
            color: #94a3b8;
            transition: color 0.2s ease;
        }

        .input-field:focus + .input-icon {
            color: var(--odm-blue);
        }

        .button-primary {
            width: 100%;
            background: var(--odm-orange);
            color: white;
            border: none;
            padding: 1rem;
            border-radius: 12px;
            font-size: 1.1rem;
            font-weight: 700;
            cursor: pointer;
            transition: all 0.2s ease;
            box-shadow: 0 4px 12px rgba(249, 115, 22, 0.3);
            margin-top: 1rem;
        }

        .button-primary:hover {
            background: #ea580c;
            transform: translateY(-2px);
            box-shadow: 0 6px 16px rgba(249, 115, 22, 0.4);
        }

        .button-primary:active {
            transform: translateY(0);
        }

        .form-footer {
            margin-top: 2rem;
            text-align: center;
            color: #64748b;
            font-size: 1rem;
        }

        .form-footer a {
            color: var(--odm-orange);
            font-weight: 700;
            text-decoration: none;
        }

        .form-footer a:hover {
            text-decoration: underline;
        }

        @keyframes fadeIn {
            from { opacity: 0; transform: translateY(10px); }
            to { opacity: 1; transform: translateY(0); }
        }

        /* Responsive Fix - No Logo Clipping */
        @media (max-width: 1024px) {
            .page-container {
                flex-direction: column;
            }

            .branding-section {
                width: 100%;
                height: 45vh;
                clip-path: polygon(0 0, 100% 0, 100% 90%, 0% 100%);
                padding-right: 0;
                padding-bottom: 2rem;
                flex: none;
            }

            .form-section {
                width: 100%;
                margin-left: 0;
                margin-top: -5vh;
                padding: 3rem 1.5rem;
                flex: none;
            }

            .branding-title {
                font-size: 2.5rem;
            }

            .logo-img {
                height: 160px;
            }
        }
    </style>
</head>
<body>
    <div class="page-container">
        <!-- Branding Side -->
        <div class="branding-section">
            <div class="branding-content">
                <img src="{{ asset('images/logo.jpeg') }}" alt="ODM Comrades Chapter Logo" class="logo-img">
                <h1 class="branding-title">ODM <span>COMRADES</span></h1>
                <p class="branding-subtitle">Chapter</p>
            </div>
        </div>

        <!-- Form Side -->
        <div class="form-section">
            <div class="login-container">
                <div class="form-header">
                    <h2>Member Login</h2>
                    <p>Enter your details to access your portal</p>
                </div>

                @if ($errors->any())
                    <div class="mb-6 p-4 bg-red-50 border-l-4 border-red-500 rounded-md">
                        <ul class="text-sm text-red-700">
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif

                <form action="{{ route('login') }}" method="POST" class="space-y-5">
                    @csrf
                    
                    <div class="input-group">
                        <label for="phone_number" class="label-text">Phone Number</label>
                        <div class="input-relative">
                            <input id="phone_number" name="phone_number" type="text" required 
                                   class="input-field" 
                                   placeholder="e.g. 0712 345 678" autofocus>
                            <i data-lucide="phone" class="input-icon w-5 h-5"></i>
                        </div>
                    </div>

                    <div class="input-group">
                        <label for="national_id" class="label-text">National ID Number</label>
                        <div class="input-relative">
                            <input id="national_id" name="national_id" type="text" required 
                                   class="input-field" 
                                   placeholder="Your ID Number">
                            <i data-lucide="id-card" class="input-icon w-5 h-5"></i>
                        </div>
                    </div>

                    <div class="flex items-center">
                        <input id="remember" name="remember" type="checkbox" 
                               class="w-4 h-4 text-blue-800 border-gray-300 rounded focus:ring-blue-800">
                        <label for="remember" class="ml-2 block text-sm text-gray-700 font-medium cursor-pointer">
                            Keep me logged in
                        </label>
                    </div>

                    <button type="submit" class="button-primary">
                        Log In
                    </button>
                </form>

                <div class="form-footer">
                    Not a member yet? <a href="{{ route('register') }}">Apply for membership</a>
                </div>

                <div class="mt-12 pt-6 border-t border-gray-100 text-center">
                    <p class="text-gray-400 text-xs font-semibold uppercase tracking-widest">
                        &copy; {{ date('Y') }} ODM Comrades Chapter
                    </p>
                </div>
            </div>
        </div>
    </div>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            lucide.createIcons();
        });
    </script>
</body>
</html>
