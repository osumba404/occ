<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

use App\Http\Controllers\AuthController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\UssdController;

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

Route::get('/dashboard', [DashboardController::class, 'index'])->middleware('auth')->name('dashboard');

// Admin routes
Route::middleware(['auth', 'admin'])->prefix('admin')->name('admin.')->group(function () {
    Route::get('/', [AdminController::class, 'index'])->name('index');
    Route::get('/users', [AdminController::class, 'users'])->name('users');
    Route::get('/users/{id}', [AdminController::class, 'showUser'])->name('users.show');
    Route::post('/users/{id}/toggle-admin', [AdminController::class, 'toggleAdmin'])->name('users.toggle-admin');
    Route::get('/export/users/{format}', [AdminController::class, 'exportUsers'])->name('export.users');
});

// USSD Routes
Route::post('/ussd', [UssdController::class, 'handleUssd']);
Route::get('/ussd', [UssdController::class, 'handleUssd']);
Route::get('/ussd-test', function() {
    return view('ussd-test');
});

// USSD webhook for external gateways
Route::post('/webhook/ussd', [UssdController::class, 'handleUssd']);
