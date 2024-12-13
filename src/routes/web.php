<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\InquiryController;

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

Route::get('/', [InquiryController::class, 'index'])->name('confirm.index');
Route::post('/confirm', [InquiryController::class, 'confirm']);
Route::get('/confirm', [InquiryController::class, 'store']);
Route::post('/thanks', [InquiryController::class, 'store']);