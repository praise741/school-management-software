<?php

use App\Http\Controllers\admin;
use App\Http\Controllers\admin\departmentsController;
use App\Http\Controllers\admin\doctorsController;
use App\Http\Controllers\Auth\EmailVerificationController;
use App\Http\Controllers\Auth\LogoutController;
use App\Http\Controllers\Auth\RegisteredUserController;
use App\Http\Livewire\Auth\Login;
use App\Http\Livewire\Auth\Passwords\Confirm;
use App\Http\Livewire\Auth\Passwords\Email;
use App\Http\Livewire\Auth\Passwords\Reset;
use App\Http\Livewire\Auth\Register;
use App\Http\Livewire\Auth\Verify;
use App\Http\Resources\doctor;
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
/*superadmin*/
    Route::middleware(['auth'])->group(function () {
    Route::get('admin', [admin::class, 'index'])->name('home');

    Route::get('admin/doctor',[doctorsController::class,'index']);
    Route::get('admin/doctor/add',[doctorsController::class, 'create']);
    Route::post('admin/doctor/add',[doctorsController::class, 'store']);

    Route::get('admin/departments',[departmentsController::class,'index']);
    Route::get('admin/departments/add', [departmentsController::class,'create']);
    Route::post('admin/departments/add', [departmentsController::class,'store']);
});
/*superadmin*/




Route::middleware('guest')->group(function () {
    Route::get('login', Login::class)
        ->name('login');
        Route::post('register',[RegisteredUserController::class,'store']);
    Route::get('register', [RegisteredUserController::class,'create'])
        ->name('register');
});


Route::get('password/reset', Email::class)
    ->name('password.request');

Route::get('password/reset/{token}', Reset::class)
    ->name('password.reset');

Route::middleware('auth')->group(function () {
    Route::get('email/verify', Verify::class)
        ->middleware('throttle:6,1')
        ->name('verification.notice');

    Route::get('password/confirm', Confirm::class)
        ->name('password.confirm');
});

Route::middleware('auth')->group(function () {
    Route::get('email/verify/{id}/{hash}', EmailVerificationController::class)
        ->middleware('signed')
        ->name('verification.verify');

    Route::post('logout', LogoutController::class)
        ->name('logout');
});


