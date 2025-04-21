<?php

use Illuminate\Support\Facades\Route;

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

// Route::get('/', function () {
//     return view('public_site.layouts.about_us');
// });
//  -------------------------------------------public_site----------------------------------------------------------------

Route::get('/', function () {
    return view('public_site.layouts.home');
});
Route::get('/about_us', function () {
    return view('public_site.layouts.about_us');
});
Route::get('/shop', function () {
    return view('public_site.layouts.shop');
});
Route::get('/blog', function () {
    return view('public_site.layouts.blog');
});
Route::get('/contact', function () {
    return view('public_site.layouts.contact');
});
Route::get('/login', function () {
    return view('public_site.layouts.login');
});
Route::get('/Register', function () {
    return view('public_site.layouts.Register');
});
//  -------------------------------------------dashborde----------------------------------------------------------------
// Route::get('/dashborde', function () {
//     return view('dashborde.layouts.dashbord');
// });
Route::get('/Bookings', function () {
    return view('dashborde.layouts.Bookings_Management');
});
Route::get('/Customers', function () {
    return view('dashborde.layouts.Customers_Management');
});
Route::get('/Services', function () {
    return view('dashborde.layouts.Services_Management');
});
Route::get('/Vendors', function () {
    return view('dashborde.layouts.Vendors_Management');
});
Route::prefix('dashboard')->middleware('auth')->group(function () {
    Route::get('/', [DashboardController::class, 'index'])->name('dashboard.index');
});
use App\Http\Controllers\Auth\LoginController;

// مسار تسجيل الدخول
Route::get('/login', [LoginController::class, 'showLoginForm'])->name('login');
Route::post('/login', [LoginController::class, 'login']);



// Route::get('/', function () {
//     return view('dashborde.welcomee');
// });

Route::get('/dashboard', function () {
    return view('dashborde.layouts.dashbord');
});

Route::get('/chart', function () {
    return view('dashborde.layouts.chart');
});
Route::get('/users', function () {
    return view('dashborde.layouts.users');
});