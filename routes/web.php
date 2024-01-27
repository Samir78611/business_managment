<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\signupController;
use App\Http\Controllers\loginController;
use App\Http\Controllers\dashboardController;
use App\Http\Controllers\BusinessController;
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

Route::get('/', function () {
    return view('welcome');
});

// Business Signup
Route::get('signup', function () {
    return view('signup');
});
Route::get('login', function () {
    return view('login');
});
// signup
Route::post('user_signup',[signupController::class,'Signup']);
// login
Route::post('login_user',[loginController::class,'LoginUser']);
// dashboared
Route::get('dashboard',[dashboardController::class,'Index']);

// logout
Route::get('logout_user',[dashboardController::class,'Logout']);

Route::post('/create_business', [BusinessController::class, 'store'])->name('business.store');