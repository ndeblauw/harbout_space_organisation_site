<?php

use Illuminate\Support\Facades\Route;
use Spatie\Health\Http\Controllers\HealthCheckResultsController;

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

Route::get('health', HealthCheckResultsController::class);

// Frontend routes for guest visitors
Route::get('/', \App\Http\Controllers\WelcomeController::class)->name('welcome');
Route::get('test', function () {
    throw new \Exception('error Nico morning now awaken');
});

// Testing the payments
Route::get('payments-test/start', [\App\Http\Controllers\PaymentTestController::class, 'preparePayment']);
Route::get('payments-test/after/{id}', [\App\Http\Controllers\PaymentTestController::class, 'afterPayment'])->name('order.success');
Route::post('payments-test/webhook', [\App\Http\Controllers\PaymentTestController::class, 'webhook'])->name('webhooks.mollie');

// Logged in user
Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

// Admin routes
Route::middleware([])->prefix('admin')->group(function () {
    Route::resource('activities', \App\Http\Controllers\Admin\ActivityController::class);
    Route::get('activities/{activity}/toggle', \App\Http\Controllers\Admin\ActivityToggleVisibilityController::class)->name('activities.toggle');
});

require __DIR__.'/auth.php';
