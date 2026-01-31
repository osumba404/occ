<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard - ODM Comrades Chapter</title>
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
<body class="bg-gray-100 min-h-screen">
    <!-- Navigation -->
    <nav class="bg-white shadow-lg">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex justify-between h-16">
                <div class="flex items-center">
                    <img src="{{ asset('images/odmlogo.png') }}" alt="ODM Logo" class="h-8 w-auto mr-4">
                    <span class="font-bold text-xl text-gray-800">ODM Comrades Chapter</span>
                </div>
                <div class="flex items-center space-x-4">
                    <a href="{{ route('dashboard') }}" class="text-gray-700 hover:text-orange-600">Dashboard</a>
                    @if(auth()->user()->is_admin)
                        <a href="{{ route('admin.index') }}" class="text-gray-700 hover:text-orange-600 font-semibold">Access Admin Panel</a>
                    @endif
                    <form action="{{ route('logout') }}" method="POST" class="inline">
                        @csrf
                        <button type="submit" class="text-gray-700 hover:text-orange-600">Logout</button>
                    </form>
                </div>
            </div>
        </div>
    </nav>

    <!-- Main Content -->
    <div class="max-w-7xl mx-auto py-6 sm:px-6 lg:px-8">
        <div class="px-4 py-6 sm:px-0">
            <div class="bg-white overflow-hidden shadow rounded-lg">
                <div class="px-4 py-5 sm:p-6">
                    <h1 class="text-2xl font-bold text-gray-900 mb-6">My Account Details</h1>
                    
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                        <!-- Personal Information -->
                        <div class="bg-gray-50 p-6 rounded-lg">
                            <h2 class="text-lg font-semibold text-gray-900 mb-4">Personal Information</h2>
                            <div class="space-y-3">
                                <div>
                                    <span class="font-medium text-gray-700">National ID:</span>
                                    <span class="ml-2 text-gray-600">{{ $user->national_id }}</span>
                                </div>
                                <div>
                                    <span class="font-medium text-gray-700">Phone Number:</span>
                                    <span class="ml-2 text-gray-600">{{ $user->phone_number }}</span>
                                </div>
                                <div>
                                    <span class="font-medium text-gray-700">Surname:</span>
                                    <span class="ml-2 text-gray-600">{{ $user->surname }}</span>
                                </div>
                                <div>
                                    <span class="font-medium text-gray-700">First/Middle Name:</span>
                                    <span class="ml-2 text-gray-600">{{ $user->first_middle_name }}</span>
                                </div>
                            </div>
                        </div>

                        <!-- Institution Information -->
                        <div class="bg-gray-50 p-6 rounded-lg">
                            <h2 class="text-lg font-semibold text-gray-900 mb-4">Institution Information</h2>
                            <div class="space-y-3">
                                <div>
                                    <span class="font-medium text-gray-700">Institution:</span>
                                    <span class="ml-2 text-gray-600">{{ $user->institution ? $user->institution->name : 'Not specified' }}</span>
                                </div>
                                @if($user->institution)
                                    <div>
                                        <span class="font-medium text-gray-700">Category:</span>
                                        <span class="ml-2 text-gray-600">{{ $user->institution->category }}</span>
                                    </div>
                                    <div>
                                        <span class="font-medium text-gray-700">Type:</span>
                                        <span class="ml-2 text-gray-600">{{ $user->institution->institution_type }}</span>
                                    </div>
                                    <div>
                                        <span class="font-medium text-gray-700">Location:</span>
                                        <span class="ml-2 text-gray-600">{{ $user->institution->location }}</span>
                                    </div>
                                @endif
                            </div>
                        </div>

                        <!-- Polling Station Information -->
                        <div class="bg-gray-50 p-6 rounded-lg">
                            <h2 class="text-lg font-semibold text-gray-900 mb-4">Polling Station Information</h2>
                            <div class="space-y-3">
                                <div>
                                    <span class="font-medium text-gray-700">Polling Station:</span>
                                    <span class="ml-2 text-gray-600">{{ $user->pollingStation ? $user->pollingStation->name : 'Not specified' }}</span>
                                </div>
                                @if($user->pollingStation && $user->pollingStation->ward)
                                    <div>
                                        <span class="font-medium text-gray-700">Ward:</span>
                                        <span class="ml-2 text-gray-600">{{ $user->pollingStation->ward->name }}</span>
                                    </div>
                                    @if($user->pollingStation->ward->subcounty)
                                        <div>
                                            <span class="font-medium text-gray-700">Constituency:</span>
                                            <span class="ml-2 text-gray-600">{{ $user->pollingStation->ward->subcounty->name }}</span>
                                        </div>
                                        @if($user->pollingStation->ward->subcounty->county)
                                            <div>
                                                <span class="font-medium text-gray-700">County:</span>
                                                <span class="ml-2 text-gray-600">{{ $user->pollingStation->ward->subcounty->county->name }}</span>
                                            </div>
                                            @if($user->pollingStation->ward->subcounty->county->region)
                                                <div>
                                                    <span class="font-medium text-gray-700">Region:</span>
                                                    <span class="ml-2 text-gray-600">{{ $user->pollingStation->ward->subcounty->county->region->name }}</span>
                                                </div>
                                            @endif
                                        @endif
                                    @endif
                                @endif
                            </div>
                        </div>

                        <!-- Account Status -->
                        <div class="bg-gray-50 p-6 rounded-lg">
                            <h2 class="text-lg font-semibold text-gray-900 mb-4">Account Status</h2>
                            <div class="space-y-3">
                                <div>
                                    <span class="font-medium text-gray-700">Member Since:</span>
                                    <span class="ml-2 text-gray-600">{{ $user->created_at->format('d M Y') }}</span>
                                </div>
                                <div>
                                    <span class="font-medium text-gray-700">Account Type:</span>
                                    <span class="ml-2 text-gray-600">
                                        @if($user->is_admin)
                                            <span class="text-green-600 font-semibold">Administrator</span>
                                        @else
                                            <span class="text-blue-600">Member</span>
                                        @endif
                                    </span>
                                </div>
                                <div>
                                    <span class="font-medium text-gray-700">Last Updated:</span>
                                    <span class="ml-2 text-gray-600">{{ $user->updated_at->format('d M Y H:i') }}</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
