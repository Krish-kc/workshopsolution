<?php

use App\Http\Controllers\Admin\ServiceBookController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\Admin\WorkShopController;
use App\Http\Controllers\Admin\VehicleController;
use App\Http\Controllers\Admin\ServiceController;
use App\Http\Controllers\Admin\RoleController;
use App\Http\Controllers\Admin\PermissionController;

use App\Http\Controllers\Admin\UserController;

use App\Http\Controllers\Admin\ServiceRecordController;
use App\Http\Controllers\User\PageController;
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




//all userUI Routes
Route::get('/home',[PageController::class,'home'])->name('home');
Route::get('/about',[PageController::class,'about'])->name('about');
Route::get('/workshop-service',[PageController::class,'service'])->name('workshop-service');
Route::get('/contact',[PageController::class,'contact'])->name('contact');







Auth::routes();





Route::get('/workshop-index',[WorkShopController::class,'index'])->name('workshop-index');

//routes for admins pannel
Route::get('/admin',[AdminController::class,'dashbord']);
Route::resource('shop', WorkShopController::class);
Route::resource('vehicle', VehicleController::class);
Route::resource('servicebook', ServiceBookController::class);
Route::resource('user', UserController::class);

// Route::resource('shop', ControllersWorkShopController::class);

Route::resource('service', ServiceController::class);

Route::resource('serviceRecord', ServiceRecordController::class);

// Role and Permission route

Route::resource('role', RoleController::class);

Route::resource('permission', PermissionController::class);
