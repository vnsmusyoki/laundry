<?php

use App\Http\Controllers\PagesContentController;
use Illuminate\Support\Facades\Auth;
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

// Route::get('/', function () {
//     return view('welcome');
// });

Auth::routes();

Route::get('/', [PagesContentController::class, 'index']);
Route::get('/about-us', [PagesContentController::class, 'aboutus']);
Route::get('/services', [PagesContentController::class, 'services']);
Route::get('/services/house-cleaning', [PagesContentController::class, 'housecleaning']);
Route::get('/services/cleaning-services', [PagesContentController::class, 'cleaningservices']);
Route::get('/services/plumbing-services', [PagesContentController::class, 'plumbingservices']);
Route::get('/services/car-washing', [PagesContentController::class, 'carwashing']);
Route::get('/contact-us', [PagesContentController::class, 'contactus']);
Route::get('/booking-service', [PagesContentController::class, 'bookingservice']);

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
 