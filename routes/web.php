<?php

use App\Http\Controllers\ServiceController;
use App\Http\Controllers\ServiceTransactionController;
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

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');

Route::post('/seller/service/create', [ServiceController::class, 'create']);
Route::get('/seller/service/create', [ServiceController::class, 'form_create']);

Route::get('/seller/service/transaction/start', [ServiceTransactionController::class, 'view_start_transaction']);
Route::post('/seller/service/transaction/start', [ServiceTransactionController::class, 'start_transaction']);

Route::get('/user/transaction/confirm/{id}', [ServiceTransactionController::class, 'accept_transaction']);
Route::get('/user/transaction/check/{id}', [ServiceTransactionController::class, 'check_transaction']);
