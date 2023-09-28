<?php

use App\Http\Controllers\Admin\Auth\AuthenticatedSessionController;
use App\Http\Controllers\Admin\Auth\RegisteredAdminController;
use App\Http\Controllers\Customer\Auth\ConfirmablePasswordController;
use Illuminate\Support\Facades\Route;

    Route::group(['prefix' => 'admin', 'middleware' => 'guest:admin'], function(){
        Route::get('/', [RegisteredAdminController::class, 'create'])
                ->name('admin.signup');

        Route::post('/signup/admin', [RegisteredAdminController::class, 'storeAdmin'])
                ->name('admin.store');

        Route::get('/adminlogin', [AuthenticatedSessionController::class, 'create'])
                ->name('admin.login');

        Route::post('/login/admin', [AuthenticatedSessionController::class, 'store'])
                ->name('admin.authenticate');
    });

Route::group(['prefix' => 'admin', 'middleware' => 'auth:admin'], function(){

    Route::get('confirm-password', [ConfirmablePasswordController::class, 'show'])
                ->name('password.confirm');

    Route::post('confirm-password', [ConfirmablePasswordController::class, 'store']);

    Route::post('adminlogout', [AuthenticatedSessionController::class, 'destroy'])
                ->name('admin.logout');
});

