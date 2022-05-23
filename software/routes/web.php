<?php

use App\Http\Controllers\student;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

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
Route::post('/student/update',[student::class,'updateme']);
Route::get('/update', [student::class,'update' ] );
Route::get('/dashboard',  [student::class , 'index'])->middleware('auth','student')->name('dashboard');
Route::get('/', function () {
    return view('welcome');

});



require __DIR__.'/auth.php';


Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});
