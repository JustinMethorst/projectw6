<?php

use App\Http\Controllers\AfspraakController;
use App\Http\Controllers\KlantenController;
use App\Http\Controllers\PaymentController;
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

Route::get('/', function () {
    return view('welcome');
});

Route::get('customer/create', [KlantenController::class, 'index']);
Route::post('customer/create', [KlantenController::class, 'create']);

Route::get('afspraak', [AfspraakController::class, 'index']);
Route::get('afspraak/payment', [AfspraakController::class, 'paymentView']);

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');

//    Route::get('/payment', function () {
//        return view('payment');
//    })->name('payment');

});
