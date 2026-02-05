<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Join the Movement - ODM Comrades Chapter</title>
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
    <style type="text/tailwindcss">
        .form-card {
            background: #ffffff;
            border: 1px solid #e5e7eb;
            box-shadow: 0 25px 50px -12px rgba(0, 0, 0, 0.25);
        }
        .form-input {
            @apply w-full rounded-xl border border-gray-300 py-3 px-4 focus:ring-2 focus:ring-orange-500 focus:border-orange-500 transition-all outline-none bg-gray-50/50;
        }
    </style>
</head>
<body class="bg-gradient-to-br from-[#FF8C00] to-[#F97316] min-h-screen font-sans selection:bg-blue-900 selection:text-white overflow-x-hidden">
    <!-- Subtle Pattern Overlay -->
    <div class="fixed top-0 left-0 w-full h-full pointer-events-none opacity-10 -z-10" 
         style="background-image: url('https://www.transparenttextures.com/patterns/cubes.png');"></div>

    <div class="min-h-screen flex flex-col items-center justify-center p-4 sm:p-6 lg:p-8">
        <!-- Brand Header -->
        <div class="w-full max-w-4xl mb-8 flex flex-col items-center">
            <a href="{{ url('/') }}" class="inline-flex items-center gap-3 group transition-transform hover:scale-105">
                <div class="p-2 bg-white rounded-2xl shadow-xl">
                    <img src="{{ asset('images/odmlogo.png') }}" alt="ODM Logo" class="h-12 w-auto">
                </div>
                <div class="flex flex-col">
                    <span class="text-2xl font-bold text-blue-950 tracking-tight">ODM Comrades</span>
                    <span class="text-sm font-bold text-white tracking-wider">CHAPTER</span>
                </div>
            </a>
        </div>

        <!-- Registration Card -->
        <div class="w-full max-w-4xl form-card rounded-2xl overflow-hidden anim-fade-up">
            <div class="flex flex-col lg:flex-row">
                <!-- Left Side: Visual/Text -->
                <div class="lg:w-1/3 bg-gradient-to-br from-orange-600 to-orange-500 p-8 lg:p-12 text-white flex flex-col justify-center">
                    <h2 class="text-3xl font-bold mb-6">Join the Movement</h2>
                    <p class="text-orange-50/80 mb-8 leading-relaxed">
                        Become a member of the official ODM Comrades Chapter. Participate in leadership, empowerment, and progressive change.
                    </p>
                    
                    <div class="space-y-6">
                        <div class="flex items-center gap-4">
                            <div class="w-10 h-10 rounded-full bg-white/20 flex items-center justify-center">
                                <i data-lucide="check" class="w-5 h-5"></i>
                            </div>
                            <span class="font-medium">Direct Representation</span>
                        </div>
                        <div class="flex items-center gap-4">
                            <div class="w-10 h-10 rounded-full bg-white/20 flex items-center justify-center">
                                <i data-lucide="users" class="w-5 h-5"></i>
                            </div>
                            <span class="font-medium">Network of Comrades</span>
                        </div>
                        <div class="flex items-center gap-4">
                            <div class="w-10 h-10 rounded-full bg-white/20 flex items-center justify-center">
                                <i data-lucide="trending-up" class="w-5 h-5"></i>
                            </div>
                            <span class="font-medium">Capacity Building</span>
                        </div>
                    </div>
                </div>

                <!-- Right Side: Form -->
                <div class="lg:w-2/3 p-8 lg:p-12">
                    @if ($errors->any())
                        <div class="mb-8 p-4 bg-red-50 border-l-4 border-red-500 rounded-r-xl">
                            <div class="flex items-start gap-3">
                                <i data-lucide="alert-circle" class="text-red-500 w-5 h-5 shrink-0 mt-0.5"></i>
                                <div>
                                    <h4 class="text-sm font-bold text-red-800 mb-1">Please fix the following:</h4>
                                    <ul class="text-sm text-red-700 list-disc list-inside">
                                        @foreach ($errors->all() as $error)
                                            <li>{{ $error }}</li>
                                        @endforeach
                                    </ul>
                                </div>
                            </div>
                        </div>
                    @endif

                    <form action="{{ route('register') }}" method="POST">
                        @csrf
                        
                        <!-- Section: Personal Information -->
                        <div class="mb-10">
                            <h3 class="text-xs font-bold text-gray-400 uppercase tracking-widest mb-6 flex items-center gap-2">
                                <span class="w-8 h-[1px] bg-gray-200"></span>
                                Personal Information
                            </h3>
                            
                            <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                                <div class="relative">
                                    <label class="flex items-center gap-2 text-sm font-semibold text-gray-700 mb-2">
                                        <i data-lucide="id-card" class="w-4 h-4 text-orange-600"></i>
                                        National ID
                                    </label>
                                    <input name="national_id" type="text" value="{{ old('national_id') }}" required 
                                           class="form-input" placeholder="e.g. 12345678">
                                </div>
                                
                                <div class="relative">
                                    <label class="flex items-center gap-2 text-sm font-semibold text-gray-700 mb-2">
                                        <i data-lucide="phone" class="w-4 h-4 text-orange-600"></i>
                                        Phone Number
                                    </label>
                                    <input name="phone_number" type="text" value="{{ old('phone_number') }}" required 
                                           class="form-input" placeholder="e.g. 0712345678">
                                </div>

                                <div class="relative">
                                    <label class="flex items-center gap-2 text-sm font-semibold text-gray-700 mb-2">
                                        <i data-lucide="user" class="w-4 h-4 text-orange-600"></i>
                                        Surname
                                    </label>
                                    <input name="surname" type="text" value="{{ old('surname') }}" required 
                                           class="form-input" placeholder="Legal surname">
                                </div>

                                <div class="relative">
                                    <label class="flex items-center gap-2 text-sm font-semibold text-gray-700 mb-2">
                                        <i data-lucide="user-plus" class="w-4 h-4 text-orange-600"></i>
                                        First/Middle Name
                                    </label>
                                    <input name="first_middle_name" type="text" value="{{ old('first_middle_name') }}" required 
                                           class="form-input" placeholder="Other names">
                                </div>
                            </div>
                        </div>

                        <!-- Section: Institution & Location -->
                        <div class="mb-10">
                            <h3 class="text-xs font-bold text-gray-400 uppercase tracking-widest mb-6 flex items-center gap-2">
                                <span class="w-8 h-[1px] bg-gray-200"></span>
                                Membership Details
                            </h3>
                            
                            <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                                <div class="md:col-span-2 relative" id="institution-search-wrapper">
                                    <label class="flex items-center gap-2 text-sm font-semibold text-gray-700 mb-2">
                                        <i data-lucide="graduation-cap" class="w-4 h-4 text-orange-600"></i>
                                        Institution
                                    </label>
                                    <div class="relative group">
                                        <input type="text" id="institution_display" 
                                               class="form-input" 
                                               placeholder="Type to search your institution..."
                                               autocomplete="off">
                                        
                                        <!-- Hidden input to store the actual ID -->
                                        <input type="hidden" id="institution_id" name="institution_id" value="{{ old('institution_id') }}">

                                        <!-- Suggestions Dropdown -->
                                        <div id="institution_suggestions" 
                                             class="hidden absolute z-50 left-0 right-0 mt-2 max-h-60 overflow-y-auto bg-white rounded-xl shadow-2xl ring-1 ring-black ring-opacity-5 border border-gray-100">
                                            <div class="py-1" id="suggestions_list">
                                                @foreach($institutions as $institution)
                                                    <button type="button" 
                                                            class="w-full text-left px-4 py-3 text-sm text-gray-700 hover:bg-orange-50 hover:text-orange-700 transition-colors border-b border-gray-50 last:border-0 suggestion-item"
                                                            data-id="{{ $institution->id }}"
                                                            data-name="{{ $institution->name }}">
                                                        {{ $institution->name }}
                                                    </button>
                                                @endforeach
                                            </div>
                                            <div id="no_suggestions" class="hidden px-4 py-3 text-sm text-gray-500 italic">
                                                No matching institutions found
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="relative">
                                    <label class="flex items-center gap-2 text-sm font-semibold text-gray-700 mb-2">
                                        <i data-lucide="map" class="w-4 h-4 text-orange-600"></i>
                                        Voting Region
                                    </label>
                                    <select id="region_id" name="region_id" required class="form-input transition-all">
                                        <option value="">Select Region</option>
                                        @foreach($regions as $region)
                                            <option value="{{ $region->region_code }}" {{ old('region_id') == $region->region_code ? 'selected' : '' }}>
                                                {{ $region->name }}
                                            </option>
                                        @endforeach
                                    </select>
                                </div>

                                <div class="relative">
                                    <label class="flex items-center gap-2 text-sm font-semibold text-gray-700 mb-2">
                                        <i data-lucide="map-pin" class="w-4 h-4 text-orange-600"></i>
                                        County
                                    </label>
                                    <select id="county_id" name="county_id" required class="form-input transition-all disabled:opacity-50" disabled>
                                        <option value="">Select County</option>
                                    </select>
                                </div>

                                <div class="relative">
                                    <label class="flex items-center gap-2 text-sm font-semibold text-gray-700 mb-2">
                                        <i data-lucide="map-pin" class="w-4 h-4 text-orange-600"></i>
                                        Constituency
                                    </label>
                                    <select id="subcounty_id" name="subcounty_id" required class="form-input transition-all disabled:opacity-50" disabled>
                                        <option value="">Select Constituency</option>
                                    </select>
                                </div>

                                <div class="relative">
                                    <label class="flex items-center gap-2 text-sm font-semibold text-gray-700 mb-2">
                                        <i data-lucide="map-pin" class="w-4 h-4 text-orange-600"></i>
                                        Ward
                                    </label>
                                    <select id="ward_id" name="ward_id" required class="form-input transition-all disabled:opacity-50" disabled>
                                        <option value="">Select Ward</option>
                                    </select>
                                </div>

                                <div class="md:col-span-2 relative">
                                    <label class="flex items-center gap-2 text-sm font-semibold text-gray-700 mb-2">
                                        <i data-lucide="map-pin" class="w-4 h-4 text-orange-600"></i>
                                        Polling Station
                                    </label>
                                    <input id="polling_station_name" name="polling_station_name" type="text" 
                                            value="{{ old('polling_station_name') }}" required 
                                            class="form-input" placeholder="Search or enter your polling station">
                                </div>
                            </div>
                        </div>

                        <!-- Section: Security -->
                        <!-- <div class="mb-10">
                            <h3 class="text-xs font-bold text-gray-400 uppercase tracking-widest mb-6 flex items-center gap-2">
                                <span class="w-8 h-[1px] bg-gray-200"></span>
                                Security
                            </h3>
                            
                            <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                                <div class="relative">
                                    <label class="block text-sm font-semibold text-gray-700 mb-2">Password</label>
                                    <div class="relative group">
                                        <i data-lucide="lock" class="form-input-icon"></i>
                                        <input id="password" name="password" type="password" required 
                                               class="form-input pr-12" placeholder="Min. 8 characters">
                                        <button type="button" onclick="togglePassword('password', this)" 
                                                class="absolute right-3 top-1/2 -translate-y-1/2 text-gray-400 hover:text-orange-600 transition-colors p-1">
                                            <i data-lucide="eye" class="w-5 h-5"></i>
                                        </button>
                                    </div>
                                </div>

                                <div class="relative">
                                    <label class="block text-sm font-semibold text-gray-700 mb-2">Confirm Password</label>
                                    <div class="relative group">
                                        <i data-lucide="shield-check" class="form-input-icon"></i>
                                        <input id="password_confirmation" name="password_confirmation" type="password" required 
                                               class="form-input pr-12" placeholder="Repeat password">
                                        <button type="button" onclick="togglePassword('password_confirmation', this)" 
                                                class="absolute right-3 top-1/2 -translate-y-1/2 text-gray-400 hover:text-orange-600 transition-colors p-1">
                                            <i data-lucide="eye" class="w-5 h-5"></i>
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div> -->

                        <!-- Submit Button -->
                        <div class="flex flex-col items-center gap-6 mt-12">
                            <button type="submit" 
                                    class="w-full py-4 px-8 bg-blue-950 rounded-2xl text-white font-bold text-lg shadow-xl shadow-blue-900/20 hover:bg-blue-900 hover:-translate-y-1 active:scale-[0.98] transition-all duration-300">
                                Complete Registration
                            </button>
                            
                            <p class="text-gray-500 font-medium">
                                Already a member? 
                                <a href="{{ route('login') }}" class="text-orange-600 hover:text-orange-700 font-bold underline decoration-orange-300 underline-offset-4 decoration-2">
                                    Log in here
                                </a>
                            </p>
                        </div>
                    </form>
                </div>
            </div>
        </div>

        <!-- System Footer -->
        <div class="mt-12 text-center text-gray-500 text-sm">
            <p>&copy; {{ date('Y') }} ODM Comrades Chapter. Licensed under reputable leadership.</p>
        </div>
    </div>

    <!-- Scripts -->
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            // Initialize Lucide icons
            lucide.createIcons();

            const regionSelect = document.getElementById('region_id');
            const countySelect = document.getElementById('county_id');
            const subcountySelect = document.getElementById('subcounty_id');
            const wardSelect = document.getElementById('ward_id');

            // Generic fetch and populate helper
            const populateDropdown = (url, select, placeholder) => {
                select.innerHTML = `<option value="">${placeholder}</option>`;
                select.disabled = true;
                
                return fetch(url)
                    .then(res => res.json())
                    .then(data => {
                        data.forEach(item => {
                            const option = document.createElement('option');
                            option.value = item.iebc_code;
                            option.textContent = item.name;
                            select.appendChild(option);
                        });
                        select.disabled = false;
                        return data;
                    })
                    .catch(err => console.error(`Error loading data from ${url}:`, err));
            };

            // Region change handler
            regionSelect.addEventListener('change', function() {
                const regionId = this.value;
                if (regionId) {
                    populateDropdown(`/api/counties/${regionId}`, countySelect, 'Select County');
                } else {
                    countySelect.disabled = true;
                }
                subcountySelect.disabled = true;
                wardSelect.disabled = true;
            });

            // County change handler
            countySelect.addEventListener('change', function() {
                const countyId = this.value;
                if (countyId) {
                    populateDropdown(`/api/subcounties/${countyId}`, subcountySelect, 'Select Constituency');
                } else {
                    subcountySelect.disabled = true;
                }
                wardSelect.disabled = true;
            });

            // Subcounty change handler
            subcountySelect.addEventListener('change', function() {
                const subcountyId = this.value;
                if (subcountyId) {
                    populateDropdown(`/api/wards/${subcountyId}`, wardSelect, 'Select Ward');
                } else {
                    wardSelect.disabled = true;
                }
            });

            // Institution Search Filtering & Suggestions Logic
            const institutionWrapper = document.getElementById('institution-search-wrapper');
            const institutionDisplay = document.getElementById('institution_display');
            const institutionIdInput = document.getElementById('institution_id');
            const suggestionsDropdown = document.getElementById('institution_suggestions');
            const suggestionsList = document.getElementById('suggestions_list');
            const suggestionItems = document.querySelectorAll('.suggestion-item');
            const noSuggestions = document.getElementById('no_suggestions');

            // Set initial display if ID exists (old input)
            if (institutionIdInput.value) {
                const selectedSuggestion = Array.from(suggestionItems).find(item => item.dataset.id === institutionIdInput.value);
                if (selectedSuggestion) {
                    institutionDisplay.value = selectedSuggestion.dataset.name;
                }
            }

            institutionDisplay.addEventListener('focus', () => {
                suggestionsDropdown.classList.remove('hidden');
                filterSuggestions();
            });

            institutionDisplay.addEventListener('input', () => {
                suggestionsDropdown.classList.remove('hidden');
                institutionIdInput.value = ''; // Clear ID while typing
                filterSuggestions();
            });

            function filterSuggestions() {
                const searchTerm = institutionDisplay.value.toLowerCase().trim();
                let matchCount = 0;

                suggestionItems.forEach(item => {
                    const name = item.dataset.name.toLowerCase();
                    if (name.includes(searchTerm)) {
                        item.classList.remove('hidden');
                        matchCount++;
                    } else {
                        item.classList.add('hidden');
                    }
                });

                if (matchCount === 0) {
                    noSuggestions.classList.remove('hidden');
                    suggestionsList.classList.add('hidden');
                } else {
                    noSuggestions.classList.add('hidden');
                    suggestionsList.classList.remove('hidden');
                }
            }

            suggestionItems.forEach(item => {
                item.addEventListener('click', () => {
                    institutionDisplay.value = item.dataset.name;
                    institutionIdInput.value = item.dataset.id;
                    suggestionsDropdown.classList.add('hidden');
                });
            });

            // Close dropdown when clicking outside
            document.addEventListener('click', (e) => {
                if (!institutionWrapper.contains(e.target)) {
                    suggestionsDropdown.classList.add('hidden');
                }
            });
        });

        // Password Toggle Logic
        // function togglePassword(inputId, btn) {
        //     const input = document.getElementById(inputId);
        //     const icon = btn.querySelector('i');
            
        //     if (input.type === 'password') {
        //         input.type = 'text';
        //         icon.setAttribute('data-lucide', 'eye-off');
        //     } else {
        //         input.type = 'password';
        //         icon.setAttribute('data-lucide', 'eye');
        //     }
        //     lucide.createIcons();
        // }
    </script>
</body>
</html>
