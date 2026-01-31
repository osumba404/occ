<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Details - ODM Comrades Chapter</title>
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
                    <span class="font-bold text-xl text-gray-800">Admin Panel</span>
                </div>
                <div class="flex items-center space-x-4">
                    <a href="{{ route('dashboard') }}" class="text-gray-700 hover:text-orange-600">Dashboard</a>
                    <a href="{{ route('admin.users') }}" class="text-gray-700 hover:text-orange-600">Users</a>
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
            <div class="mb-6">
                <a href="{{ route('admin.users') }}" class="text-orange-600 hover:text-orange-500">← Back to Users</a>
            </div>
            
            <h1 class="text-3xl font-bold text-gray-900 mb-6">User Details</h1>
            
            <div class="grid grid-cols-1 lg:grid-cols-3 gap-6">
                <!-- User Information Card -->
                <div class="lg:col-span-2">
                    <div class="bg-white shadow rounded-lg">
                        <div class="px-4 py-5 sm:p-6">
                            <h2 class="text-lg font-medium text-gray-900 mb-4">Personal Information</h2>
                            <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
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
                                    <span class="font-medium text-gray-700">Member Since:</span>
                                    <span class="ml-2 text-gray-600">{{ $user->created_at->format('d M Y H:i') }}</span>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Institution Information -->
                    <div class="bg-white shadow rounded-lg mt-6">
                        <div class="px-4 py-5 sm:p-6">
                            <h2 class="text-lg font-medium text-gray-900 mb-4">Institution Information</h2>
                            @if($user->institution)
                                <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                                    <div>
                                        <span class="font-medium text-gray-700">Institution Name:</span>
                                        <span class="ml-2 text-gray-600">{{ $user->institution->name }}</span>
                                    </div>
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
                                </div>
                            @else
                                <p class="text-gray-500">No institution information available</p>
                            @endif
                        </div>
                    </div>

                    <!-- Polling Station Information -->
                    <div class="bg-white shadow rounded-lg mt-6">
                        <div class="px-4 py-5 sm:p-6">
                            <h2 class="text-lg font-medium text-gray-900 mb-4">Polling Station Information</h2>
                            @if($user->pollingStation)
                                <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                                    <div>
                                        <span class="font-medium text-gray-700">Polling Station:</span>
                                        <span class="ml-2 text-gray-600">{{ $user->pollingStation->name }}</span>
                                    </div>
                                    <div>
                                        <span class="font-medium text-gray-700">IEBC Code:</span>
                                        <span class="ml-2 text-gray-600">{{ $user->pollingStation->iebc_code }}</span>
                                    </div>
                                    @if($user->pollingStation->ward)
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
                            @else
                                <p class="text-gray-500">No polling station information available</p>
                            @endif
                        </div>
                    </div>
                </div>

                <!-- Actions Sidebar -->
                <div class="lg:col-span-1">
                    <div class="bg-white shadow rounded-lg">
                        <div class="px-4 py-5 sm:p-6">
                            <h2 class="text-lg font-medium text-gray-900 mb-4">Actions</h2>
                            <div class="space-y-3">
                                @if($user->id != auth()->id())
                                    <form action="{{ route('admin.users.toggle-admin', $user->id) }}" method="POST">
                                        @csrf
                                        <button type="submit" class="w-full flex justify-center py-2 px-4 border border-transparent rounded-md shadow-sm text-sm font-medium text-white {{ $user->is_admin ? 'bg-red-600 hover:bg-red-700' : 'bg-green-600 hover:bg-green-700' }}" onclick="return confirm('Are you sure you want to {{ $user->is_admin ? 'remove admin from' : 'make' }} this user?')">
                                            {{ $user->is_admin ? 'Remove Admin Access' : 'Grant Admin Access' }}
                                        </button>
                                    </form>
                                @else
                                    <div class="text-sm text-gray-500 text-center p-3 bg-gray-50 rounded">
                                        You cannot modify your own admin status
                                    </div>
                                @endif
                                
                                <button class="w-full flex justify-center py-2 px-4 border border-gray-300 rounded-md shadow-sm text-sm font-medium text-gray-700 bg-white hover:bg-gray-50">
                                    Send Message
                                </button>
                                
                                <button class="w-full flex justify-center py-2 px-4 border border-gray-300 rounded-md shadow-sm text-sm font-medium text-gray-700 bg-white hover:bg-gray-50">
                                    Export Profile
                                </button>
                            </div>
                        </div>
                    </div>

                    <!-- Account Status -->
                    <div class="bg-white shadow rounded-lg mt-6">
                        <div class="px-4 py-5 sm:p-6">
                            <h2 class="text-lg font-medium text-gray-900 mb-4">Account Status</h2>
                            <div class="space-y-3">
                                <div class="flex justify-between">
                                    <span class="font-medium text-gray-700">Status:</span>
                                    <span class="text-green-600 font-semibold">Active</span>
                                </div>
                                <div class="flex justify-between">
                                    <span class="font-medium text-gray-700">Email Verified:</span>
                                    <span class="text-green-600 font-semibold">Yes</span>
                                </div>
                                <div class="flex justify-between">
                                    <span class="font-medium text-gray-700">Last Login:</span>
                                    <span class="text-gray-600">Unknown</span>
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
