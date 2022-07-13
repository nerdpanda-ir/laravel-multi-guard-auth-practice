<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\User\UserAuthenticationController;
use App\Http\Controllers\User\UserLogoutController;
use App\Http\Controllers\User\UserPanelController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\AdminAuthenticationController;
use App\Http\Controllers\Admin\AdminLogoutController ;
use App\Http\Controllers\Admin\AdminPanelController ;
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
Route::get('',HomeController::class)->name('home');
Route::get('user-login',[UserAuthenticationController::class,'login'])
        ->name('user-login')
        ->middleware('guest:web');
Route::get('do-user-login',[UserAuthenticationController::class,'doLogin'])
        ->name('do-user-login')
        ->middleware('guest');
Route::get('user-panel',UserPanelController::class)
    ->name('user-panel')
    ->middleware('auth');
Route::get('user-logout',UserLogoutController::class)
        ->name('user-logout')
        ->middleware('auth');



Route::get('admin-login',[AdminAuthenticationController::class,'login'])
    ->name('admin-login')
    ->middleware('guest:admin');
Route::get('do-admin-login',[AdminAuthenticationController::class,'doLogin'])
    ->name('do-admin-login')
    ->middleware('guest:admin');
Route::get('admin-panel',AdminPanelController::class)
    ->name('admin-panel')
    ->middleware('auth:admin');
Route::get('admin-logout',AdminLogoutController::class)
    ->name('admin-logout')
    ->middleware('auth:admin');
