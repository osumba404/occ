<?php

namespace App\Http\Controllers;

use App\Models\Institution;
use App\Models\PollingStation;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rule;

class AuthController extends Controller
{
    public function showRegistrationForm()
    {
        $institutions = Institution::all();
        $pollingStations = PollingStation::all();
        return view('auth.register', compact('institutions', 'pollingStations'));
    }

    public function register(Request $request)
    {
        $request->validate([
            'phone_number' => 'required|string|unique:users',
            'surname' => 'required|string',
            'first_middle_name' => 'required|string',
            'institution_id' => 'required|exists:institutions,id',
            'polling_station_id' => 'required|exists:polling_stations,id',
            'password' => 'required|string|min:8|confirmed',
        ]);

        $user = User::create([
            'phone_number' => $request->phone_number,
            'surname' => $request->surname,
            'first_middle_name' => $request->first_middle_name,
            'institution_id' => $request->institution_id,
            'polling_station_id' => $request->polling_station_id,
            'password' => Hash::make($request->password),
        ]);

        Auth::login($user);

        return redirect('/dashboard');
    }

    public function showLoginForm()
    {
        return view('auth.login');
    }

    public function login(Request $request)
    {
        $credentials = $request->validate([
            'phone_number' => 'required|string',
            'password' => 'required|string',
        ]);

        if (Auth::attempt($credentials)) {
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
