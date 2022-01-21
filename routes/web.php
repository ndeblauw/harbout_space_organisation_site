<?php

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

Route::get('/', \App\Http\Controllers\WelcomeController::class)->name('welcome');

Route::get('test', function () {
    //abort(401);
    throw new \Exception('error Nico morning now awaken');
});

Route::middleware([])->group(function () {
    Route::resource('activities', \App\Http\Controllers\ActivityController::class);
    Route::get('activities/{activity}/toggle', \App\Http\Controllers\ActivityToggleVisibilityController::class)->name('activities.toggle');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';
