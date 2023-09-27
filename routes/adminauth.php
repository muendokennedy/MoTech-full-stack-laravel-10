<?php

use App\Http\Controllers\Admin\Auth\RegisteredAdminController;
use App\Http\Controllers\Admin\Auth\AuthenticatedSessionController;
use App\Http\Controllers\Customer\Auth\ConfirmablePasswordController;
use App\Http\Controllers\Customer\Auth\EmailVerificationNotificationController;
use App\Http\Controllers\Customer\Auth\NewPasswordController;
use App\Http\Controllers\Customer\Auth\PasswordController;
use App\Http\Controllers\Customer\Auth\PasswordResetLinkController;
use App\Http\Controllers\Customer\Auth\RegisteredUserController;
use App\Http\Controllers\Customer\Auth\VerifyEmailController;
use Illuminate\Support\Facades\Route;


    Route::prefix('admin')->group(function(){

        Route::get('/', [RegisteredAdminController::class, 'create'])
                    ->name('admin.signup');

        Route::post('/signup/admin', [RegisteredAdminController::class, 'storeAdmin'])
                    ->name('admin.store');

        Route::get('/adminlogin', [AuthenticatedSessionController::class, 'create'])
                    ->name('admin.login');

        Route::post('/login/admin', [AuthenticatedSessionController::class, 'store'])
                    ->name('admin.authenticate');

        Route::get('forgot-password', [PasswordResetLinkController::class, 'create'])
                    ->name('password.request');

        Route::post('forgot-password', [PasswordResetLinkController::class, 'store'])
                    ->name('password.email');

        Route::get('reset-password/{token}', [NewPasswordController::class, 'create'])
                    ->name('password.reset');

        Route::post('reset-password', [NewPasswordController::class, 'store'])
                    ->name('password.store');
    });

Route::middleware('auth')->group(function () {

    Route::get('verify-email/{id}/{hash}', VerifyEmailController::class)
                ->middleware(['signed', 'throttle:6,1'])
                ->name('verification.verify');

    Route::post('email/verification-notification', [EmailVerificationNotificationController::class, 'store'])
                ->middleware('throttle:6,1')
                ->name('verification.send');

    Route::get('confirm-password', [ConfirmablePasswordController::class, 'show'])
                ->name('password.confirm');

    Route::post('confirm-password', [ConfirmablePasswordController::class, 'store']);

    Route::put('password', [PasswordController::class, 'update'])->name('password.update');

    Route::post('logout', [AuthenticatedSessionController::class, 'destroy'])
                ->name('logout');
});
