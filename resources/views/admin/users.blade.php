<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Users Management - ODM Comrades Chapter</title>
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
        <div class="w-full mx-auto px-4 sm:px-6 lg:px-8">
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
    <div class="w-full mx-auto py-6 sm:px-6 lg:px-8">
        <div class="px-4 py-6 sm:px-0">
            <div class="flex justify-between items-center mb-6">
                <h1 class="text-3xl font-bold text-gray-900">Users Management</h1>
                <div class="flex items-center space-x-4">
                    <!-- Export Dropdown -->
                    <div class="relative">
                        <button type="button" class="inline-flex items-center px-3 py-2 border border-gray-300 shadow-sm text-sm leading-4 font-medium rounded-md text-gray-700 bg-white hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-orange-500" id="export-menu-users" aria-expanded="true" aria-haspopup="true">
                            <svg class="w-4 h-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 10v6m0 0l-3-3m3 3l3-3m2 8H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"></path>
                            </svg>
                            Export All Users
                            <svg class="-mr-1 ml-2 h-5 w-5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd" />
                            </svg>
                        </button>
                        
                        <!-- Sort Dropdown -->
                        <div class="relative inline-block text-left ml-2">
                            <button type="button" class="inline-flex items-center px-3 py-2 border border-gray-300 shadow-sm text-sm leading-4 font-medium rounded-md text-gray-700 bg-white hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-orange-500" id="sort-menu-users" aria-expanded="true" aria-haspopup="true">
                                <svg class="w-4 h-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 4h13M3 8h9m-9 4h6m4 0l4-4m0 0l4 4m-4-4v12"></path>
                                </svg>
                                Sort By
                                <svg class="-mr-1 ml-2 h-5 w-5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                    <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd" />
                                </svg>
                            </button>

                            <div class="origin-top-right absolute right-0 mt-2 w-56 rounded-md shadow-lg bg-white ring-1 ring-black ring-opacity-5 divide-y divide-gray-100 focus:outline-none z-10" role="menu" aria-orientation="vertical" aria-labelledby="sort-menu-users" style="display: none;" id="sort-dropdown-users">
                                <div class="py-1" role="none">
                                    <span class="block px-4 py-2 text-xs text-gray-500 font-semibold uppercase tracking-wide">Sort by County</span>
                                    <a href="{{ route('admin.users', array_merge(request()->all(), ['sort_by' => 'county', 'sort_dir' => 'asc'])) }}" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 {{ request('sort_by') === 'county' && request('sort_dir') === 'asc' ? 'bg-gray-100 font-semibold' : '' }}" role="menuitem">County (A-Z)</a>
                                    <a href="{{ route('admin.users', array_merge(request()->all(), ['sort_by' => 'county', 'sort_dir' => 'desc'])) }}" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 {{ request('sort_by') === 'county' && request('sort_dir') === 'desc' ? 'bg-gray-100 font-semibold' : '' }}" role="menuitem">County (Z-A)</a>
                                </div>
                                <div class="py-1" role="none">
                                    <span class="block px-4 py-2 text-xs text-gray-500 font-semibold uppercase tracking-wide">Sort by Constituency</span>
                                    <a href="{{ route('admin.users', array_merge(request()->all(), ['sort_by' => 'constituency', 'sort_dir' => 'asc'])) }}" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 {{ request('sort_by') === 'constituency' && request('sort_dir') === 'asc' ? 'bg-gray-100 font-semibold' : '' }}" role="menuitem">Constituency (A-Z)</a>
                                    <a href="{{ route('admin.users', array_merge(request()->all(), ['sort_by' => 'constituency', 'sort_dir' => 'desc'])) }}" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 {{ request('sort_by') === 'constituency' && request('sort_dir') === 'desc' ? 'bg-gray-100 font-semibold' : '' }}" role="menuitem">Constituency (Z-A)</a>
                                </div>
                                <div class="py-1" role="none">
                                    <span class="block px-4 py-2 text-xs text-gray-500 font-semibold uppercase tracking-wide">Sort by Ward</span>
                                    <a href="{{ route('admin.users', array_merge(request()->all(), ['sort_by' => 'ward', 'sort_dir' => 'asc'])) }}" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 {{ request('sort_by') === 'ward' && request('sort_dir') === 'asc' ? 'bg-gray-100 font-semibold' : '' }}" role="menuitem">Ward (A-Z)</a>
                                    <a href="{{ route('admin.users', array_merge(request()->all(), ['sort_by' => 'ward', 'sort_dir' => 'desc'])) }}" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 {{ request('sort_by') === 'ward' && request('sort_dir') === 'desc' ? 'bg-gray-100 font-semibold' : '' }}" role="menuitem">Ward (Z-A)</a>
                                </div>
                            </div>
                        </div>

                        <div class="origin-top-right absolute right-0 mt-2 w-48 rounded-md shadow-lg bg-white ring-1 ring-black ring-opacity-5 divide-y divide-gray-100 focus:outline-none z-10" role="menu" aria-orientation="vertical" aria-labelledby="export-menu-users" style="display: none;" id="export-dropdown-users">
                            <div class="py-1" role="none">
                                <a href="{{ route('admin.export.users', 'csv') }}" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100" role="menuitem">Export as CSV</a>
                                <a href="{{ route('admin.export.users', 'xlsx') }}" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100" role="menuitem">Export as Excel (.xlsx)</a>
                                <a href="{{ route('admin.export.users', 'pdf') }}" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100" role="menuitem">Export as PDF</a>
                                <a href="{{ route('admin.export.users', 'docx') }}" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100" role="menuitem">Export as Word (.docx)</a>
                            </div>
                        </div>
                    </div>
                    <div class="text-sm text-gray-600">
                        Total Users: {{ $users->total() }}
                    </div>
                </div>
            </div>
            
            <!-- Filter Section -->
            <div class="bg-white shadow px-4 py-5 sm:rounded-lg sm:p-6 mb-6">
                <div class="md:grid md:grid-cols-4 md:gap-6">
                    <div class="md:col-span-1">
                        <h3 class="text-lg font-medium leading-6 text-gray-900">Filter Location</h3>
                        <p class="mt-1 text-sm text-gray-500">
                            Select location to filter users.
                        </p>
                    </div>
                    <div class="mt-5 md:mt-0 md:col-span-3">
                        <form action="{{ route('admin.users') }}" method="GET" id="filter-form">
                            <!-- Preserve sort params if they exist -->
                            @if(request('sort_by'))
                                <input type="hidden" name="sort_by" value="{{ request('sort_by') }}">
                            @endif
                            @if(request('sort_dir'))
                                <input type="hidden" name="sort_dir" value="{{ request('sort_dir') }}">
                            @endif

                            <div class="grid grid-cols-6 gap-6">
                                <div class="col-span-6 sm:col-span-2">
                                    <label for="county" class="block text-sm font-medium text-gray-700">County</label>
                                    <select id="county" name="county" class="mt-1 block w-full py-2 px-3 border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-orange-500 focus:border-orange-500 sm:text-sm">
                                        <option value="">All Counties</option>
                                        @foreach($counties as $county)
                                            <option value="{{ $county->iebc_code }}" {{ request('county') == $county->iebc_code ? 'selected' : '' }}>
                                                {{ $county->name }}
                                            </option>
                                        @endforeach
                                    </select>
                                </div>

                                <div class="col-span-6 sm:col-span-2">
                                    <label for="constituency" class="block text-sm font-medium text-gray-700">Constituency</label>
                                    <select id="constituency" name="constituency" class="mt-1 block w-full py-2 px-3 border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-orange-500 focus:border-orange-500 sm:text-sm" {{ request('county') ? '' : 'disabled' }}>
                                        <option value="">All Constituencies</option>
                                    </select>
                                </div>

                                <div class="col-span-6 sm:col-span-2">
                                    <label for="ward" class="block text-sm font-medium text-gray-700">Ward</label>
                                    <select id="ward" name="ward" class="mt-1 block w-full py-2 px-3 border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-orange-500 focus:border-orange-500 sm:text-sm" {{ request('constituency') ? '' : 'disabled' }}>
                                        <option value="">All Wards</option>
                                    </select>
                                </div>
                            </div>
                            
                            <div class="mt-4 flex justify-end space-x-3">
                                <a href="{{ route('admin.users') }}" class="inline-flex justify-center py-2 px-4 border border-gray-300 shadow-sm text-sm font-medium rounded-md text-gray-700 bg-white hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-orange-500">
                                    Reset
                                </a>
                                <button type="submit" class="inline-flex justify-center py-2 px-4 border border-transparent shadow-sm text-sm font-medium rounded-md text-white bg-orange-600 hover:bg-orange-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-orange-500">
                                    Filter
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            
            <div class="bg-white shadow rounded-lg">
                <div class="px-4 py-5 sm:p-6">
                    <div class="overflow-x-auto">
                        <table class="min-w-full divide-y divide-gray-200">
                            <thead class="bg-gray-50">
                                <tr>
                                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Name</th>
                                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Contact</th>
                                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Institution</th>
                                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                        <a href="{{ route('admin.users', array_merge(request()->all(), ['sort_by' => 'county', 'sort_dir' => request('sort_dir') === 'asc' ? 'desc' : 'asc'])) }}" class="group inline-flex items-center hover:text-gray-700">
                                            County
                                            @if(request('sort_by') === 'county')
                                                <span class="ml-2 flex-none rounded text-gray-400 group-hover:visible group-focus:visible">
                                                    @if(request('sort_dir') === 'asc')
                                                        <!-- Heroicon name: solid/chevron-up -->
                                                        <svg class="h-5 w-5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                                          <path fill-rule="evenodd" d="M14.707 12.707a1 1 0 01-1.414 0L10 9.414l-3.293 3.293a1 1 0 01-1.414-1.414l4-4a1 1 0 011.414 0l4 4a1 1 0 010 1.414z" clip-rule="evenodd" />
                                                        </svg>
                                                    @else
                                                        <!-- Heroicon name: solid/chevron-down -->
                                                        <svg class="h-5 w-5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                                          <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd" />
                                                        </svg>
                                                    @endif
                                                </span>
                                            @endif
                                        </a>
                                    </th>
                                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                        <a href="{{ route('admin.users', array_merge(request()->all(), ['sort_by' => 'constituency', 'sort_dir' => request('sort_dir') === 'asc' ? 'desc' : 'asc'])) }}" class="group inline-flex items-center hover:text-gray-700">
                                            Constituency
                                            @if(request('sort_by') === 'constituency')
                                                <span class="ml-2 flex-none rounded text-gray-400 group-hover:visible group-focus:visible">
                                                    @if(request('sort_dir') === 'asc')
                                                        <svg class="h-5 w-5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                                          <path fill-rule="evenodd" d="M14.707 12.707a1 1 0 01-1.414 0L10 9.414l-3.293 3.293a1 1 0 01-1.414-1.414l4-4a1 1 0 011.414 0l4 4a1 1 0 010 1.414z" clip-rule="evenodd" />
                                                        </svg>
                                                    @else
                                                        <svg class="h-5 w-5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                                          <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd" />
                                                        </svg>
                                                    @endif
                                                </span>
                                            @endif
                                        </a>
                                    </th>
                                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                        <a href="{{ route('admin.users', array_merge(request()->all(), ['sort_by' => 'ward', 'sort_dir' => request('sort_dir') === 'asc' ? 'desc' : 'asc'])) }}" class="group inline-flex items-center hover:text-gray-700">
                                            Ward
                                            @if(request('sort_by') === 'ward')
                                                <span class="ml-2 flex-none rounded text-gray-400 group-hover:visible group-focus:visible">
                                                    @if(request('sort_dir') === 'asc')
                                                        <svg class="h-5 w-5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                                          <path fill-rule="evenodd" d="M14.707 12.707a1 1 0 01-1.414 0L10 9.414l-3.293 3.293a1 1 0 01-1.414-1.414l4-4a1 1 0 011.414 0l4 4a1 1 0 010 1.414z" clip-rule="evenodd" />
                                                        </svg>
                                                    @else
                                                        <svg class="h-5 w-5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                                          <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd" />
                                                        </svg>
                                                    @endif
                                                </span>
                                            @endif
                                        </a>
                                    </th>
                                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Polling Station</th>
                                   
                                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Actions</th>
                                </tr>
                            </thead>
                            <tbody class="bg-white divide-y divide-gray-200">
                                @foreach($users as $user)
                                    <tr>
                                        <td class="px-6 py-4 whitespace-nowrap">
                                            <div class="text-sm font-medium text-gray-900">{{ $user->surname }}, {{ $user->first_middle_name }}</div>
                                            <div class="text-sm text-gray-500">ID: {{ $user->national_id }}</div>
                                        </td>
                                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">{{ $user->phone_number }}</td>
                                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">
                                            {{ $user->institution ? $user->institution->name : 'N/A' }}
                                        </td>
                                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">
                                            {{ $user->pollingStation && $user->pollingStation->ward && $user->pollingStation->ward->subcounty && $user->pollingStation->ward->subcounty->county ? $user->pollingStation->ward->subcounty->county->name : 'N/A' }}
                                        </td>
                                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">
                                            {{ $user->pollingStation && $user->pollingStation->ward && $user->pollingStation->ward->subcounty ? $user->pollingStation->ward->subcounty->name : 'N/A' }}
                                        </td>
                                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">
                                            {{ $user->pollingStation && $user->pollingStation->ward ? $user->pollingStation->ward->name : 'N/A' }}
                                        </td>
                                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">
                                            {{ $user->pollingStation ? $user->pollingStation->name : 'N/A' }}
                                        </td>
                                      
                                        <td class="px-6 py-4 whitespace-nowrap text-sm font-medium space-x-2">
                                            <a href="{{ route('admin.users.show', $user->id) }}" class="text-orange-600 hover:text-orange-900">View</a>
                                            @if($user->id != auth()->id())
                                                <form action="{{ route('admin.users.toggle-admin', $user->id) }}" method="POST" class="inline">
                                                    @csrf
                                                    <!-- <button type="submit" class="text-blue-600 hover:text-blue-900" onclick="return confirm('Are you sure you want to {{ $user->is_admin ? 'remove admin from' : 'make' }} this user?')">
                                                        {{ $user->is_admin ? 'Remove Admin' : 'Make Admin' }}
                                                    </button> -->
                                                </form>
                                            @endif
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                    
                    <!-- Pagination -->
                    @if($users->hasPages())
                        <div class="mt-6">
                            {{ $users->links() }}
                        </div>
                    @endif
                </div>
            </div>
        </div>
    </div>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            // Export dropdown toggle for users page
            const exportMenuUsers = document.getElementById('export-menu-users');
            const exportDropdownUsers = document.getElementById('export-dropdown-users');
            
            if (exportMenuUsers && exportDropdownUsers) {
                exportMenuUsers.addEventListener('click', function(e) {
                    e.preventDefault();
                    e.stopPropagation();
                    exportDropdownUsers.style.display = exportDropdownUsers.style.display === 'none' ? 'block' : 'none';
                });
                
                // Close dropdown when clicking outside
                document.addEventListener('click', function() {
                    exportDropdownUsers.style.display = 'none';
                });
                
                // Prevent dropdown from closing when clicking inside
                exportDropdownUsers.addEventListener('click', function(e) {
                    e.stopPropagation();
                });
            }

            // Sort dropdown toggle
            const sortMenuUsers = document.getElementById('sort-menu-users');
            const sortDropdownUsers = document.getElementById('sort-dropdown-users');
            
            if (sortMenuUsers && sortDropdownUsers) {
                sortMenuUsers.addEventListener('click', function(e) {
                    e.preventDefault();
                    e.stopPropagation();
                    sortDropdownUsers.style.display = sortDropdownUsers.style.display === 'none' ? 'block' : 'none';
                    // Close other dropdowns
                    if (exportDropdownUsers) exportDropdownUsers.style.display = 'none';
                });
                
                // Close dropdown when clicking outside
                document.addEventListener('click', function() {
                    sortDropdownUsers.style.display = 'none';
                });
                
                // Prevent dropdown from closing when clicking inside
                sortDropdownUsers.addEventListener('click', function(e) {
                    e.stopPropagation();
                });
            }


            // Cascading Dropdowns
            const countySelect = document.getElementById('county');
            const constituencySelect = document.getElementById('constituency');
            const wardSelect = document.getElementById('ward');

            // Initial Load (if filters are set)
            if (countySelect.value) {
                loadConstituencies(countySelect.value, '{{ request('constituency') }}');
            }
            if ('{{ request('constituency') }}') {
                loadWards('{{ request('constituency') }}', '{{ request('ward') }}');
            }

            countySelect.addEventListener('change', function() {
                const countyId = this.value;
                constituencySelect.innerHTML = '<option value="">All Constituencies</option>';
                wardSelect.innerHTML = '<option value="">All Wards</option>';
                wardSelect.disabled = true;

                if (countyId) {
                    constituencySelect.disabled = false;
                    loadConstituencies(countyId);
                } else {
                    constituencySelect.disabled = true;
                }
            });

            constituencySelect.addEventListener('change', function() {
                const constituencyId = this.value;
                wardSelect.innerHTML = '<option value="">All Wards</option>';

                if (constituencyId) {
                    wardSelect.disabled = false;
                    loadWards(constituencyId);
                } else {
                    wardSelect.disabled = true;
                }
            });

            function loadConstituencies(countyId, selectedId = null) {
                fetch(`/api/subcounties/${countyId}`)
                    .then(response => response.json())
                    .then(data => {
                        data.forEach(subcounty => {
                            const option = document.createElement('option');
                            option.value = subcounty.iebc_code;
                            option.textContent = subcounty.name;
                            if (selectedId && selectedId == subcounty.iebc_code) {
                                option.selected = true;
                            }
                            constituencySelect.appendChild(option);
                        });
                    });
            }

            function loadWards(subcountyId, selectedId = null) {
                fetch(`/api/wards/${subcountyId}`)
                    .then(response => response.json())
                    .then(data => {
                        data.forEach(ward => {
                            const option = document.createElement('option');
                            option.value = ward.id;
                            option.textContent = ward.name;
                            if (selectedId && selectedId == ward.id) {
                                option.selected = true;
                            }
                            wardSelect.appendChild(option);
                        });
                    });
            }
        });
    </script>
</body>
</html>
