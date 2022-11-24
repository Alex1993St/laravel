<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SharedController;
use App\Http\Controllers\QuoteController;

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

Route::get('/', [QuoteController::class, 'index'])->name('quote.index');

Auth::routes();

Route::group(['middleware' => ['auth']], function () {
    Route::resource('quote', QuoteController::class)->except(['index','show', 'destroy']);
});

Route::post('/shared', [SharedController::class, 'shared'])->name('shared');
