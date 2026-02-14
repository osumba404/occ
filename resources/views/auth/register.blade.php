<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
    <title>Join Us | ODM Comrades Chapter</title>
    
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
            flex: 0.7; /* Reduced from 1 to make it less 'big' */
            background: var(--odm-blue);
            display: flex;
            align-items: center;
            justify-content: center;
            position: relative;
            z-index: 10;
            clip-path: polygon(0 0, 100% 0, 92% 100%, 0% 100%); /* Shallower cut */
            padding: 0 5% 0 2rem;
        }

        /* Form Section - Clean White */
        .form-section {
            flex: 1.3;
            background: var(--odm-white);
            display: flex;
            align-items: center;
            justify-content: center;
            position: relative;
            margin-left: -5%;
            z-index: 5;
        }

        .register-container {
            width: 100%;
            max-width: 540px;
            padding: 3rem 2rem;
            background: white;
            border-radius: 12px;
            box-shadow: 0 10px 30px rgba(0,0,0,0.05);
        }

        .branding-content {
            text-align: center;
            padding: 2rem;
            max-width: 90%;
        }

        .logo-img {
            height: clamp(100px, 15vh, 180px); /* Slightly smaller */
            width: auto;
            margin-bottom: 2rem;
            filter: drop-shadow(0 10px 20px rgba(0, 0, 0, 0.15));
        }

        .branding-title {
            color: var(--odm-white);
            font-size: clamp(2rem, 3.5vw, 3rem); /* More responsive scaling */
            font-weight: 800;
            line-height: 1.1;
            margin-bottom: 0.5rem;
            letter-spacing: -0.02em;
        }

        .branding-title span {
            color: var(--odm-orange);
        }

        .branding-subtitle {
            color: var(--odm-white);
            font-size: 1.1rem;
            font-weight: 700;
            text-transform: uppercase;
            letter-spacing: 0.3em;
            opacity: 0.9;
        }

        .step-indicator {
            display: flex;
            justify-content: space-between;
            margin-bottom: 3rem;
            position: relative;
        }

        .step-indicator::before {
            content: '';
            position: absolute;
            top: 20px;
            left: 0;
            right: 0;
            height: 2px;
            background: #e2e8f0;
            z-index: 1;
        }

        .step-node {
            width: 40px;
            height: 40px;
            border-radius: 50%;
            background: var(--odm-white);
            border: 2px solid #e2e8f0;
            display: flex;
            align-items: center;
            justify-content: center;
            font-weight: 700;
            color: #94a3b8;
            position: relative;
            z-index: 2;
            transition: all 0.3s ease;
        }

        .step-node.active {
            border-color: var(--odm-orange);
            color: var(--odm-orange);
            background: #fff;
            transform: scale(1.1);
        }

        .step-node.completed {
            background: var(--odm-orange);
            border-color: var(--odm-orange);
            color: white;
        }

        .form-header {
            margin-bottom: 2.5rem;
        }

        .form-header h2 {
            font-size: 2rem;
            font-weight: 800;
            color: var(--odm-blue);
            margin-bottom: 0.5rem;
        }

        .form-step {
            display: none;
            animation: slideFade 0.4s ease-out;
        }

        .form-step.active {
            display: block;
        }

        @keyframes slideFade {
            from { opacity: 0; transform: translateX(10px); }
            to { opacity: 1; transform: translateX(0); }
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

        .input-field {
            width: 100%;
            background: #f8fafc;
            border: 2px solid #e2e8f0;
            border-radius: 12px;
            padding: 0.875rem 1.25rem;
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

        .btn-nav {
            padding: 1rem 2rem;
            border-radius: 12px;
            font-size: 1rem;
            font-weight: 700;
            cursor: pointer;
            transition: all 0.2s ease;
            display: inline-flex;
            align-items: center;
            gap: 0.5rem;
        }

        .btn-next {
            background: var(--odm-orange);
            color: white;
            border: none;
            box-shadow: 0 4px 6px -1px rgba(0, 0, 0, 0.1), 0 2px 4px -1px rgba(0, 0, 0, 0.06);
        }

        .btn-next:hover {
            background: #ea580c;
            filter: brightness(1.1);
        }

        .btn-prev {
            background: #f1f5f9;
            color: #64748b;
            border: none;
        }

        .btn-prev:hover {
            background: #e2e8f0;
        }

        /* Institution Dropdown */
        .suggestions-card {
            background: white;
            border: 1px solid #e2e8f0;
            border-radius: 12px;
            box-shadow: 0 10px 25px rgba(0,0,0,0.1);
            position: absolute;
            z-index: 50;
            left: 0;
            right: 0;
            max-height: 200px;
            overflow-y: auto;
            margin-top: 5px;
        }

        /* Responsive Fix */
        @media (max-width: 1024px) {
            .page-container {
                flex-direction: column;
            }

            .branding-section {
                width: 100%;
                height: 35vh;
                clip-path: polygon(0 0, 100% 0, 100% 90%, 0% 100%);
                padding-right: 0;
                padding-bottom: 2rem;
                flex: none;
            }

            .form-section {
                width: 100%;
                margin-left: 0;
                margin-top: -5vh;
                padding: 2rem 1rem;
                flex: none;
            }

            .branding-title {
                font-size: 2.25rem;
            }

            .logo-img {
                height: 120px;
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
                <h1 class="branding-title">Join <span>ODM COMRADES</span></h1>
                <p class="branding-subtitle">Chapter</p>
            </div>
        </div>

        <!-- Form Side -->
        <div class="form-section">
            <div class="register-container">
                <!-- Step Buttons -->
                <div class="step-indicator">
                    <div class="step-node active" id="node-1">1</div>
                    <div class="step-node" id="node-2">2</div>
                    <div class="step-node" id="node-3">3</div>
                </div>

                <div class="form-header">
                    <h2 id="step-title">Identity & Contact</h2>
                    <p id="step-desc">Let's start with your basic information.</p>
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

                <form action="{{ route('register') }}" method="POST" id="register-form">
                    @csrf
                    
                    <!-- Step 1: Identity -->
                    <div class="form-step active" id="step-1">
                        <div class="input-group">
                            <label for="national_id" class="label-text">National ID</label>
                            <input name="national_id" id="national_id" type="text" value="{{ old('national_id') }}" required 
                                   class="input-field" placeholder="e.g. 12345678">
                        </div>
                        
                        <div class="input-group">
                            <label for="phone_number" class="label-text">Phone Number</label>
                            <input name="phone_number" id="phone_number" type="text" value="{{ old('phone_number') }}" required 
                                   class="input-field" placeholder="e.g. 0712345678">
                        </div>

                        <div class="mt-10 flex justify-end">
                            <button type="button" class="btn-nav btn-next" onclick="nextStep(2)">
                                Continue <i data-lucide="arrow-right" class="w-5 h-5"></i>
                            </button>
                        </div>
                    </div>

                    <!-- Step 2: Profile & Membership -->
                    <div class="form-step" id="step-2">
                        <div class="input-group">
                            <label for="surname" class="label-text">Surname</label>
                            <input name="surname" id="surname" type="text" value="{{ old('surname') }}" required 
                                   class="input-field" placeholder="Legal surname">
                        </div>

                        <div class="input-group">
                            <label for="first_middle_name" class="label-text">First/Middle Name</label>
                            <input name="first_middle_name" id="first_middle_name" type="text" value="{{ old('first_middle_name') }}" required 
                                   class="input-field" placeholder="Other names">
                        </div>

                        <div class="input-group relative" id="institution-wrapper">
                            <label for="institution_display" class="label-text">Institution</label>
                            <input type="text" id="institution_display" class="input-field" placeholder="Search your institution..." autocomplete="off">
                            <input type="hidden" id="institution_id" name="institution_id" value="{{ old('institution_id') }}">
                            
                            <div id="institution_suggestions" class="suggestions-card hidden">
                                <div class="py-1" id="suggestions_list">
                                    @foreach($institutions as $institution)
                                        <button type="button" class="w-full text-left px-4 py-2 text-sm hover:bg-orange-50 hover:text-orange-700 suggestion-item border-b border-gray-50 last:border-0" 
                                                data-id="{{ $institution->id }}" data-name="{{ $institution->name }}">
                                            {{ $institution->name }}
                                        </button>
                                    @endforeach
                                </div>
                                <div id="no-res" class="hidden px-4 py-2 text-sm text-gray-500 italic">No matches found</div>
                            </div>
                        </div>

                        <div class="mt-10 flex justify-between">
                            <button type="button" class="btn-nav btn-prev" onclick="prevStep(1)">
                                <i data-lucide="arrow-left" class="w-5 h-5"></i> Back
                            </button>
                            <button type="button" class="btn-nav btn-next" onclick="nextStep(3)">
                                Next <i data-lucide="arrow-right" class="w-5 h-5"></i>
                            </button>
                        </div>
                    </div>

                    <!-- Step 3: Location -->
                    <div class="form-step" id="step-3">
                        <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
                            <div class="input-group">
                                <label for="region_id" class="label-text">Voting Region</label>
                                <select id="region_id" name="region_id" required class="input-field">
                                    <option value="">Select Region</option>
                                    @foreach($regions as $region)
                                        <option value="{{ $region->region_code }}" {{ old('region_id') == $region->region_code ? 'selected' : '' }}>
                                            {{ $region->name }}
                                        </option>
                                    @endforeach
                                </select>
                            </div>

                            <div class="input-group">
                                <label for="county_id" class="label-text">County</label>
                                <select id="county_id" name="county_id" required class="input-field disabled:opacity-50" disabled>
                                    <option value="">Select County</option>
                                </select>
                            </div>

                            <div class="input-group">
                                <label for="subcounty_id" class="label-text">Constituency</label>
                                <select id="subcounty_id" name="subcounty_id" required class="input-field disabled:opacity-50" disabled>
                                    <option value="">Select Constituency</option>
                                </select>
                            </div>

                            <div class="input-group">
                                <label for="ward_id" class="label-text">Ward</label>
                                <select id="ward_id" name="ward_id" required class="input-field disabled:opacity-50" disabled>
                                    <option value="">Select Ward</option>
                                </select>
                            </div>
                        </div>

                        <div class="input-group mt-2">
                            <label for="polling_station_name" class="label-text">Polling Station</label>
                            <input id="polling_station_name" name="polling_station_name" type="text" 
                                   value="{{ old('polling_station_name') }}" required 
                                   class="input-field" placeholder="Search or enter your station">
                        </div>

                        <div class="mt-6 flex items-start">
                            <input id="terms" name="terms" type="checkbox" required class="mt-1 w-4 h-4 text-orange-600 border-gray-300 rounded focus:ring-orange-500">
                            <label for="terms" class="ml-2 block text-sm text-gray-600">
                                I agree to the <a href="#" class="text-orange-600 font-bold hover:underline">Membership Terms & Conditions</a> as per the chapter's policy.
                            </label>
                        </div>

                        <div class="mt-10 flex justify-between">
                            <button type="button" class="btn-nav btn-prev" onclick="prevStep(2)">
                                <i data-lucide="arrow-left" class="w-5 h-5"></i> Back
                            </button>
                            <button type="submit" class="btn-nav btn-next">
                                Complete Registration <i data-lucide="check" class="w-5 h-5"></i>
                            </button>
                        </div>
                    </div>
                </form>

                <div class="mt-8 text-center text-gray-500">
                    <p>Already joined? <a href="{{ route('login') }}" class="text-orange-600 font-bold">Log in here</a></p>
                </div>
            </div>
        </div>
    </div>

    <!-- Scripts -->
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            lucide.createIcons();
            initLocationDropdowns();
            initInstitutionSearch();
        });

        let currentStep = 1;
        const steps = {
            1: { titleText: "Identity & Contact", descText: "First, let's establish who you are." },
            2: { titleText: "Profile & Membership", descText: "Tell us about your background." },
            3: { titleText: "Location & Voting", descText: "Final step: Where do you vote?" }
        };

        function showStep(n) {
            document.querySelectorAll('.form-step').forEach(step => step.classList.remove('active'));
            document.getElementById(`step-${n}`).classList.add('active');
            
            // Nodes
            document.querySelectorAll('.step-node').forEach((node, idx) => {
                const stepNum = idx + 1;
                node.classList.remove('active', 'completed');
                if (stepNum === n) node.classList.add('active');
                if (stepNum < n) node.classList.add('completed');
            });

            // Text
            document.getElementById('step-title').innerText = steps[n].titleText;
            document.getElementById('step-desc').innerText = steps[n].descText;
            window.scrollTo(0,0);
        }

        function nextStep(n) {
            // Basic validation for current step
            const inputs = document.getElementById(`step-${currentStep}`).querySelectorAll('input[required], select[required]');
            let valid = true;
            inputs.forEach(input => {
                if (!input.value) {
                    input.classList.add('border-red-500');
                    valid = false;
                } else {
                    input.classList.remove('border-red-500');
                }
            });

            if (valid) {
                currentStep = n;
                showStep(n);
            }
        }

        function prevStep(n) {
            currentStep = n;
            showStep(n);
        }

        function initInstitutionSearch() {
            const wrapper = document.getElementById('institution-wrapper');
            const display = document.getElementById('institution_display');
            const idInput = document.getElementById('institution_id');
            const dropdown = document.getElementById('institution_suggestions');
            const items = document.querySelectorAll('.suggestion-item');
            const noRes = document.getElementById('no-res');

            display.addEventListener('focus', () => dropdown.classList.remove('hidden'));
            display.addEventListener('input', () => {
                const term = display.value.toLowerCase();
                let count = 0;
                items.forEach(item => {
                    const match = item.dataset.name.toLowerCase().includes(term);
                    item.classList.toggle('hidden', !match);
                    if (match) count++;
                });
                noRes.classList.toggle('hidden', count > 0);
                dropdown.classList.remove('hidden');
            });

            items.forEach(item => {
                item.addEventListener('click', () => {
                    display.value = item.dataset.name;
                    idInput.value = item.dataset.id;
                    dropdown.classList.add('hidden');
                });
            });

            document.addEventListener('click', (e) => {
                if (!wrapper.contains(e.target)) dropdown.classList.add('hidden');
            });
        }

        function initLocationDropdowns() {
            const region = document.getElementById('region_id');
            const county = document.getElementById('county_id');
            const subcounty = document.getElementById('subcounty_id');
            const ward = document.getElementById('ward_id');

            const load = (url, select, label) => {
                select.innerHTML = `<option value="">${label}</option>`;
                select.disabled = true;
                fetch(url).then(r => r.json()).then(data => {
                    data.forEach(item => {
                        const opt = document.createElement('option');
                        opt.value = item.iebc_code;
                        opt.textContent = item.name;
                        select.appendChild(opt);
                    });
                    select.disabled = false;
                });
            };

            region.addEventListener('change', () => {
                if (region.value) load(`/api/counties/${region.value}`, county, 'Select County');
                subcounty.disabled = true;
                ward.disabled = true;
            });

            county.addEventListener('change', () => {
                if (county.value) load(`/api/subcounties/${county.value}`, subcounty, 'Select Constituency');
                ward.disabled = true;
            });

            subcounty.addEventListener('change', () => {
                if (subcounty.value) load(`/api/wards/${subcounty.value}`, ward, 'Select Ward');
            });
        }
    </script>
</body>
</html>
