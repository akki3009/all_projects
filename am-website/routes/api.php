<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\AuthController;
use App\Http\Controllers\Api\ForgotPasswordController;
use App\Http\Controllers\Api\NewAdController;
use App\Http\Controllers\Api\UserProfileController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

// Route::middleware('auth:api')->get('/user', function (Request $request) {
//     return $request->user();
// });

Route::group([
    'middleware' => 'api',
    'prefix' => 'auth'
], function ($router) {
    Route::post('/signup', [AuthController::class, 'register'])->name('front.register');
    Route::post('/login', [AuthController::class, 'login'])->name('front.login');
    // Route::get('/user', [AuthController::class, 'userProfile'])->name('front.user');
    Route::post('/logout', [AuthController::class, 'logout'])->name('front.logout');
    Route::post('password/forgot', [ForgotPasswordController::class, 'forgot_password'])->name('passwords.sent');
    Route::post('password/reset', [ForgotPasswordController::class, 'reset'])->name('passwords.reset');
    Route::post('newAddRequest', [NewAdController::class, 'addRequest'])->name('addRequest');
    
    // Route::get('/user/{id}',[UserProfileController::class, 'userFetch'])->name('front.user');
    Route::get('/userUpdate',[UserProfileController::class, 'userFetch'])->name('front.userUpdate');
    Route::put('/user/{id}',[UserProfileController::class, 'userProfile'])->name('front.user');
});
