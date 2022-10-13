<?php

use App\Http\Controllers\ApartmentController;
use App\Http\Controllers\MonthlyPaymentController;
use App\Http\Controllers\MortgageProgramController;
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
    return view('homepage');
});

Route::resource('/apartments', ApartmentController::class);
Route::resource('/programs', MortgageProgramController::class);

Route::group(['prefix' => 'monthlypayment'], function () {
    Route::get('{apartment}', [MonthlyPaymentController::class, 'index'])->name('monthlypayment.index');
    Route::get('{apartment}/select', [MonthlyPaymentController::class, 'select'])->name('monthlypayment.select');
    Route::get('{apartment}/result', [MonthlyPaymentController::class, 'result'])->name('monthlypayment.result');
});

