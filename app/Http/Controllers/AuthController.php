<?php

namespace App\Http\Controllers;

use App\Models\Institution;
use App\Models\PollingStation;
use App\Models\User;
use App\Models\Region;
use App\Models\County;
use App\Models\Subcounty;
use App\Models\Ward;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rule;

class AuthController extends Controller
{
    public function showRegistrationForm()
    {
        $institutions = Institution::all();
        $regions = Region::all();
        return view('auth.register', compact('institutions', 'regions'));
    }

    public function register(Request $request)
    {
        $request->validate([
            'phone_number' => 'required|string|unique:users',
            'national_id' => 'required|string|unique:users',
            'surname' => 'required|string',
            'first_middle_name' => 'required|string',
            'institution_id' => 'required|exists:institutions,id',
            'region_id' => 'required|exists:regions,id',
            'county_id' => 'required|exists:counties,id',
            'subcounty_id' => 'required|exists:subcounties,id',
            'ward_id' => 'required|exists:wards,id',
            'polling_station_name' => 'required|string|max:255',
        ]);

        $user = User::create([
            'phone_number' => $request->phone_number,
            'national_id' => $request->national_id,
            'surname' => $request->surname,
            'first_middle_name' => $request->first_middle_name,
            'institution_id' => $request->institution_id,
            'polling_station_id' => $this->createPollingStation($request->polling_station_name, $request->ward_id),
        ]);

        Auth::login($user);

        return redirect('/dashboard');
    }

    private function createPollingStation($name, $wardId)
    {
        // Check if polling station already exists
        $existingStation = PollingStation::where('name', $name)->first();
        if ($existingStation) {
            return $existingStation->id;
        }

        // Create new polling station with the selected ward
        $pollingStation = PollingStation::create([
            'ward_id' => $wardId,
            'name' => $name,
            'iebc_code' => rand(1000, 9999), // Generate random IEBC code
            'active' => true,
        ]);

        return $pollingStation->id;
    }

    public function showLoginForm()
    {
        return view('auth.login');
    }

    public function login(Request $request)
    {
        $request->validate([
            'phone_number' => 'required|string',
            'national_id' => 'required|string',
        ]);

        $user = User::where('phone_number', $request->phone_number)
                    ->where('national_id', $request->national_id)
                    ->first();

        if ($user) {
            Auth::login($user);
            $request->session()->regenerate();
            return redirect()->intended('/dashboard');
        }

        return back()->withErrors([
            'phone_number' => 'The provided credentials do not match our records.',
        ]);
    }

    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect('/');
    }
}
