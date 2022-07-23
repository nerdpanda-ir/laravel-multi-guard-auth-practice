<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\V1\User\UserAuthentication;
use App\Http\Controllers\Api\V1\User\UserDashboard;
use App\Http\Controllers\Api\V1\Admin\AdminAuthenticationController;
use App\Http\Controllers\Api\V1\Admin\AdminDashboardController;
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

Route::post('user-auth',UserAuthentication::class)
    ->name('user-auth')
    ->middleware('guest');

Route::get('user-dash',UserDashboard::class)
->name('user-dash')
->middleware('auth:user_api');

Route::post('admin-auth',AdminAuthenticationController::class)
    ->name('admin-auth');

Route::get('admin-dash',AdminDashboardController::class)
    ->name('admin-dash')
    ->middleware('auth:admin_api');