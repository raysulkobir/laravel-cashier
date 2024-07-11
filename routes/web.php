<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PlaneController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::middleware("auth")->group(function () {
    Route::get('plans', [PlaneController::class, 'index']);
    Route::get('plans/{plan}', [PlaneController::class, 'show'])->name("plans.show");
    Route::post('subscription', [PlaneController::class, 'subscription'])->name("subscription.create");
});

// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
