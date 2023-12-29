<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;

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

Route::get('/', function () {
    return view('index');
})->name('home');

Route::get('/cart', function () {
    return view('cart.index');
})->name('cart');

Route::get('/contact', function () {
    return view('contact.index');
})->name('contact');

Route::get('/menu', function () {
    return view('menu.index');
})->name('menu');

Route::middleware('guest')->group(function () {
    Route::get('/login', [AuthController::class, 'showLoginForm'])->name('login');
    Route::post('/login', [AuthController::class, 'processLogin']);
    
    Route::get('/register', [AuthController::class, 'showSignupForm'])->name('register');
    Route::post('/register', [AuthController::class, 'processSignup']);
});