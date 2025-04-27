<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\WeddingHallController;
use App\Http\Controllers\PhotographyController;
use App\Http\Controllers\WeddingCarController;
use App\Http\Controllers\WeddingCakeController;
use App\Http\Controllers\BridalGroomAttireController;
use App\Http\Controllers\GroomSpaController;
use App\Http\Controllers\TransactionController;
use App\Http\Controllers\OrderController;

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

use App\Http\Controllers\Auth\LoginController;

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




//////////////////////////////////Controllers////////////////////////////////////////////////////////

Route::resource('wedding-halls', WeddingHallController::class);
Route::resource('photography', PhotographyController::class);
Route::resource('wedding-cars', WeddingCarController::class);
Route::resource('wedding-cakes', WeddingCakeController::class);
Route::resource('bridal-groom-attires', BridalGroomAttireController::class);
Route::resource('groom-spas', GroomSpaController::class);
Route::resource('transactions', TransactionController::class);
Route::resource('orders', OrderController::class);
