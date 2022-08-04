<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\webController;
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
Route::any('/clear-cache', function() {
    Artisan::call('cache:clear');
    Artisan::call('config:clear');
    Artisan::call('view:clear');
    Artisan::call('route:clear');
    return "Cache is cleared";
});
Route::any('/', [webController::class,'index']);
Route::any('/signup', [webController::class,'signup']);
Route::any('/submitsignup', [webController::class,'submitsignup']);
Route::any('/login', [LoginController::class,'login']);
Route::any('/submitlogin', [LoginController::class,'submitlogin']);
Route::middleware('login.check')->group(function(){
    Route::any('/logout', [LoginController::class,'logout']);

});