<?php

use App\Http\Controllers\CensusController;
use App\Http\Controllers\CountriesController;
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

// Route::get('/', [CountriesController::class, 'show']);
// Route::get('/dashboard-admin');
Route::get('/home', [CensusController::class, 'show'])->name('home');
Route::post('/dashboard-admin', [CensusController::class, 'submitData'])->name('dashboard-admin');
Route::get('/', function(){
    return view("home");
});
