<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\LandingPageController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\PostController;
use App\Models\Post;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', [LandingPageController::class, 'index']);
// Route::get('/', function () {
//     return view('landing-page', [
//         "title" => "Landing Page",
//         "name" => "packages",
//         "image" => "packages.jpg"
//     ]);
// });

Route::get('/dashboard', function () {
    return view('dashboard', [
        "title" => "Dashboard"
    ]);
});

Route::get('/order', function () {
    return view('order', [
        "title" => "Order Page"
    ]);
});

Route::get('/login', function () {
    return view('login', [
        "title" => "Login"
    ]);
});

Route::get('/order/{id}', [LandingPageController::class, 'order']);
Route::post('/orderRegister', [LandingPageController::class, 'transactionOrder'])->name('posts.store');


// cek domain
Route::post('/domainCheck', [LandingPageController::class, 'domainCheck']);


Route::post('/packageorder', [OrderController::class, 'orderPackage'])->name('packageorder');

Route::post('/register', [AuthController::class, 'register'])->name('register');
Route::post('/login', [AuthController::class, 'login'])->name('login');

Route::post('/verifyCode', [AuthController::class, 'verifyCode'])->name('verifyCode');
Route::get('/resendCode', [AuthController::class, 'resendCode'])->name('resendCode');

Route::get('/login', function () {
    return view('login', [
        "title" => "Login"
    ]);
});

Route::get('/payment', function () {
    return view('payment', [
        "title" => "payment"
    ]);
});

Route::get('/signup', function () {
    return view('signup', [
        "title" => "Sign Up"
    ]);
});

Route::get('/examples', [PostController::class, 'index']);

Route::get('/about', function () {
    return view('about', [
        "title" => "About Us"
    ]);
});


//halaman single post
Route::get('examples/{slug}', [PostController::class, 'show']);

Route::get('/dashboardAdmin', function () {
    return view('dashboardAdmin', [
        "title" => "Dashboard Admin"
    ]);
});

Route::get('/dashboardApayment', function () {
    return view('dashboardApayment', [
        "title" => "Dashboard Payment"
    ]);
});

Route::get('/dashboardAorder', function () {
    return view('dashboardAorder', [
        "title" => "Dashboard Order"
    ]);
});

Route::get('/revision', function () {
    return view('revision', [
        "title" => "Dashboard Revision"
    ]);
});

Route::get('/dashuser', function () {
    return view('dashuser', [
        "title" => "Dashboard User"
    ]);
});

Route::get('/paymentGateway', function () {
    return view('paymentGateway', [
        "title" => "Payment Gateway"
    ]);
});
