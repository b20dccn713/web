<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Client\HomeController;
use App\Http\Controllers\Auth\AuthClientController;

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
/*Client*/
Route::prefix('auth')->name('client.')->group(function () {
    Route::get('/login', [AuthClientController::class, 'loginClient'])->name('login');
    Route::post('/login', [AuthClientController::class, 'handleLoginClient'])->name('handleLogin');

    Route::get('/register', [AuthClientController::class, 'registerClient'])->name('register');
    Route::post('/register', [AuthClientController::class, 'handleRegisterClient'])->name('handleRegister');

});
Route::prefix('')->name('client.')->group(function () {
    Route::get('', [HomeController::class, 'index'])->name('home');
    Route::get('/logout', [AuthClientController::class, 'logout'])->name('logout');
});
