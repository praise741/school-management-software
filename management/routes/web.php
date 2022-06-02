<?php

use App\Http\Controllers\admin;
use App\Http\Controllers\super\indexController;
use App\Http\Middleware\super as MiddlewareSuper;
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

Route::middleware([MiddlewareSuper::class, 'auth'])->group(function () {
    Route::get('/dashboard', [indexController::class, 'index']);

    Route::get('/profile', function () {
        //
    });
});
Route::get('/',function(){
return view('welcome');

});



require __DIR__.'/auth.php';
