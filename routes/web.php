<?php

use App\Http\Controllers\admin\AdminAccountController;
use App\Http\Controllers\customer\CustomerAccountController;
use App\Http\Controllers\PagesContentController;
use App\Http\Controllers\pickpoint\CollectionAccountController;
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
Route::post('/user-account', [PagesContentController::class, 'registeraccount']);

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/admin/dashboard', [AdminAccountController::class, 'index'])->name('admin');
Route::prefix('admin')->group(function () {
    Route::get('add-collection-point', [AdminAccountController::class, 'addcollectionpoint']);
    Route::post('store-checkpoint', [AdminAccountController::class, 'storecollectionpoint']);
    Route::get('all-collection-points', [AdminAccountController::class, 'collectionpoints']);
    Route::get('show-collection-point/{point}', [AdminAccountController::class, 'showcollectionpoint']);
    Route::get('edit-collection-point/{point}', [AdminAccountController::class, 'editcollectionpoint']);
    Route::patch('update-checkpoint/{point}', [AdminAccountController::class, 'updatecollectionpoint']);
    Route::get('delete-collection-point/{point}', [AdminAccountController::class, 'deletecollectionpoint']);
    Route::get('all-orders', [AdminAccountController::class, 'allorders']);
    Route::get('ready-laundries', [AdminAccountController::class, 'readyorders']);
    Route::get('confirm-payment/{order}', [AdminAccountController::class, 'confirmpayment']);
    Route::get('view-customer-order/{order}', [AdminAccountController::class, 'viewcustomeroder']);
    Route::patch('payments-verdict/{order}', [AdminAccountController::class, 'paymentverdict']);
    Route::get('deliver-customer-order/{order}', [AdminAccountController::class, 'deliverorder']);
    Route::get('completed-orders', [AdminAccountController::class, 'completedorders']);
    Route::get('account-security', [AdminAccountController::class, 'accountsecurity']);
    Route::post('update-password', [AdminAccountController::class, 'updatepassword']);
    Route::post('update-email', [AdminAccountController::class, 'updateemail']);
    Route::post('update-picture', [AdminAccountController::class, 'updateavatar']);
});
Route::get('/user/dashboard', [CustomerAccountController::class, 'index'])->name('customer');
Route::prefix('user')->group(function () {
    Route::get('new-laundry', [CustomerAccountController::class, 'newlaundry']);
    Route::post('store-laundry', [CustomerAccountController::class, 'storelaundry']);
    Route::get('all-pending-orders', [CustomerAccountController::class, 'pendingorders']);
    Route::get('all-orders', [CustomerAccountController::class, 'allorders']);
    Route::get('edit-pending-order/{order}', [CustomerAccountController::class, 'editpendingorder']);
    Route::get('delete-pending-order/{order}', [CustomerAccountController::class, 'deletependingorder']);
    Route::patch('update-laundry/{order}', [CustomerAccountController::class, 'updatependingorder']);
    Route::get('all-transactions', [CustomerAccountController::class, 'alltransactions']);
    Route::get('pending-laundries', [CustomerAccountController::class, 'pendinglaundries']);
    Route::get('account-security', [CustomerAccountController::class, 'accountsecurity']);
    Route::post('update-password', [CustomerAccountController::class, 'updatepassword']);
    Route::post('update-email', [CustomerAccountController::class, 'updateemail']);
    Route::post('update-picture', [CustomerAccountController::class, 'updateavatar']);
});
Route::get('/collector/dashboard', [CollectionAccountController::class, 'index'])->name('collector');
Route::prefix('collector')->group(function (){
    Route::get('new-laundry', [CollectionAccountController::class, 'createlaundry']);
    Route::post('store-laundry', [CollectionAccountController::class, 'storelaundry']);
    Route::get('received-order-payment/{order}', [CollectionAccountController::class, 'uploadpayment']);
    Route::patch('store-payments/{order}', [CollectionAccountController::class, 'updatepayment']);
    Route::get('all-paid-orders', [CollectionAccountController::class, 'paidorders']);
    Route::get('account-security', [CollectionAccountController::class, 'accountsecurity']);
    Route::post('update-password', [CollectionAccountController::class, 'updatepassword']);
    Route::post('update-email', [CollectionAccountController::class, 'updateemail']);
    Route::post('update-picture', [CollectionAccountController::class, 'updateavatar']);
    Route::get('all-pending-orders', [CollectionAccountController::class, 'pendingorders']);
    Route::get('order-details/{order}', [CollectionAccountController::class, 'orderdetails']);
    Route::get('all-orders', [CollectionAccountController::class, 'allorders']);
});
// https://radixtouch.com/templates/admin/smart/source/light/index.html
