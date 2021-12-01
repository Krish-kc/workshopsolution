<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\Admin\WorkShopController;
use App\Http\Controllers\Admin\VehicleController;
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

Route::get('/', function () {
    return redirect('/home');
});




//all user routes are here
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');








Auth::routes();





Route::get('/workshop-index',[WorkShopController::class,'index']);

//routes for admins pannel 
Route::get('/admin',[AdminController::class,'dashbord']);
Route::resource('workshop', WorkShopController::class);
Route::resource('vehicle', VehicleController::class);