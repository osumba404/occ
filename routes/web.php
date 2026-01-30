<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

use App\Http\Controllers\AuthController;

Route::get('/membership', function () {
    return view('membership');
})->name('membership');

Route::get('/register', [AuthController::class, 'showRegistrationForm'])->name('register');
Route::post('/register', [AuthController::class, 'register']);

// API routes for cascading dropdowns
Route::get('/api/counties/{region_id}', function($region_id) {
    return response()->json(\App\Models\County::where('region_code', $region_id)->get());
});

Route::get('/api/subcounties/{county_id}', function($county_id) {
    return response()->json(\App\Models\Subcounty::where('county_code', $county_id)->get());
});

Route::get('/api/wards/{subcounty_id}', function($subcounty_id) {
    return response()->json(\App\Models\Ward::where('subcounty_code', $subcounty_id)->get());
});

Route::get('/login', [AuthController::class, 'showLoginForm'])->name('login');
Route::post('/login', [AuthController::class, 'login']);
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');

Route::get('/dashboard', function () {
    return view('welcome'); // Placeholder for dashboard
})->middleware('auth')->name('dashboard');
