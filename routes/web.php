<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\Admin\WorkShopController;
use App\Http\Controllers\Admin\VehicleController;
use App\Http\Controllers\Admin\ServiceController;

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





Route::get('/workshop-index',[WorkShopController::class,'index'])->name('workshop-index');

//routes for admins pannel 
Route::get('/admin',[AdminController::class,'dashbord']);
Route::resource('shop', App\Http\Controllers\Admin\WorkShopController::class);
Route::resource('vehicle', App\Http\Controllers\Admin\VehicleController::class);
// Route::resource('shop', ControllersWorkShopController::class);

Route::resource('service', App\Http\Controllers\Admin\ServiceController::class);