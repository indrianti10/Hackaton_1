<?php

use App\Models\Car;
use App\Models\Make;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\NewsController;
use Laravel\Socialite\Facades\Socialite;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\GoogleController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\ReservationController;
use App\Http\Controllers\DashboardCarController;
use App\Http\Controllers\DashboardMakeController;
use App\Http\Controllers\DashboardNewsController;
use App\Http\Controllers\DashboardCustomerController;
// use App\Http\Controllers\LiveSearchController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/
// Home
Route::get('/', function () {
    return view('index', [
        
    ]);
});
// About us
Route::get('/tentang_kami', function () {
    return view('tentang_kami');
});
// beli
Route::get('/beli', function () {
    return view('beli');
});
// asuransi
Route::get('/asuransi', function () {
    return view('asuransi');
});

// reservation
Route::get('/reservation', function () {
    return view('reservation');
});

// Login Group
Route::group(['middleware' => 'guest'], function () {
    // Login
    Route::get('/login', [LoginController::class, 'index']);
    Route::post('/login', [LoginController::class, 'authenticate']);
    // Register
    Route::get('/register', [RegisterController::class, 'index']);
    Route::post('/register', [RegisterController::class, 'store']);
});

// Logout
Route::post('/logout', [LoginController::class, 'logout']);

// Register Login 
Route::get('/register/google', [GoogleController::class, 'index']);
Route::post('/register/google', [GoogleController::class, 'store']);
