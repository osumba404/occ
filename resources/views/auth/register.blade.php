<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register - ODM Comrades Chapter</title>
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
<body class="bg-gradient-to-br from-gray-200 via-gray-300 to-gray-400 min-h-screen">
    <!-- ODM Logo at Top Center -->
    <div class="pt-8 pb-4">
        <div class="flex justify-center">
            <img src="{{ asset('images/odmlogo.png') }}" alt="ODM Logo" class="h-16 w-auto">
        </div>
    </div>
    
    <!-- Wide Rectangular Form -->
    <div class="flex-grow flex items-center justify-center px-4 sm:px-6 lg:px-8 pb-8">
        <div class="w-full max-w-4xl space-y-8 bg-white p-8 rounded-lg shadow">
            <div>
                <h2 class="mt-6 text-center text-3xl font-extrabold text-gray-900">
                    Join the Movement
                </h2>
                <p class="mt-2 text-center text-sm text-gray-600">
                    Register for ODM Comrades Chapter
                </p>
            </div>
            <form class="mt-8 space-y-6" action="{{ route('register') }}" method="POST">
                @csrf
                <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                    <div class="mb-4">
                        <label for="phone_number" class="block text-sm font-medium text-gray-700">Phone Number</label>
                        <input id="phone_number" name="phone_number" type="text" required class="appearance-none relative block w-full px-3 py-2 border border-gray-300 placeholder-gray-500 text-gray-900 rounded-md focus:outline-none focus:ring-orange-500 focus:border-orange-500 sm:text-sm" placeholder="Phone Number">
                    </div>
                    <div class="mb-4">
                        <label for="surname" class="block text-sm font-medium text-gray-700">Surname</label>
                        <input id="surname" name="surname" type="text" required class="appearance-none relative block w-full px-3 py-2 border border-gray-300 placeholder-gray-500 text-gray-900 rounded-md focus:outline-none focus:ring-orange-500 focus:border-orange-500 sm:text-sm" placeholder="Surname">
                    </div>
                    <div class="mb-4">
                        <label for="first_middle_name" class="block text-sm font-medium text-gray-700">First/Middle Name</label>
                        <input id="first_middle_name" name="first_middle_name" type="text" required class="appearance-none relative block w-full px-3 py-2 border border-gray-300 placeholder-gray-500 text-gray-900 rounded-md focus:outline-none focus:ring-orange-500 focus:border-orange-500 sm:text-sm" placeholder="First Name">
                    </div>
                    <div class="mb-4">
                        <label for="institution_id" class="block text-sm font-medium text-gray-700">Institution</label>
                        <select id="institution_id" name="institution_id" required class="block w-full py-2 px-3 border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-orange-500 focus:border-orange-500 sm:text-sm">
                            <option value="">Select Institution</option>
                            @foreach($institutions as $institution)
                                <option value="{{ $institution->id }}">{{ $institution->name }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="mb-4">
                        <label for="polling_station_id" class="block text-sm font-medium text-gray-700">Polling Station</label>
                        <select id="polling_station_id" name="polling_station_id" required class="block w-full py-2 px-3 border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-orange-500 focus:border-orange-500 sm:text-sm">
                            <option value="">Select Polling Station</option>
                            @foreach($pollingStations as $station)
                                <option value="{{ $station->id }}">{{ $station->name }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="mb-4">
                        <label for="password" class="block text-sm font-medium text-gray-700">Password</label>
                        <input id="password" name="password" type="password" required class="appearance-none relative block w-full px-3 py-2 border border-gray-300 placeholder-gray-500 text-gray-900 rounded-md focus:outline-none focus:ring-orange-500 focus:border-orange-500 sm:text-sm" placeholder="Password">
                    </div>
                    <div class="mb-4">
                        <label for="password_confirmation" class="block text-sm font-medium text-gray-700">Confirm Password</label>
                        <input id="password_confirmation" name="password_confirmation" type="password" required class="appearance-none relative block w-full px-3 py-2 border border-gray-300 placeholder-gray-500 text-gray-900 rounded-md focus:outline-none focus:ring-orange-500 focus:border-orange-500 sm:text-sm" placeholder="Confirm Password">
                    </div>
                </div>

                @if ($errors->any())
                    <div class="text-red-600 text-sm">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif

                <div class="flex justify-center">
                    <button type="submit" class="px-8 py-3 border border-transparent text-base font-medium rounded-md text-white hover:bg-orange-600 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-orange-500" style="background-color: #fb923c;">
                        Register
                    </button>
                </div>
                
                <div class="text-center mt-4">
                    <a href="{{ route('login') }}" class="font-medium text-orange-600 hover:text-orange-500">
                        Already have an account? Log in
                    </a>
                </div>
            </form>
        </div>
    </div>
</body>
</html>
