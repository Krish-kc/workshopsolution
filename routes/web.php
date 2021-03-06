<?php

use App\Http\Controllers\Admin\ServiceBookController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\Admin\WorkShopController;
use App\Http\Controllers\Admin\VehicleController;
use App\Http\Controllers\Admin\ServiceController;
use App\Http\Controllers\Admin\RoleController;
use App\Http\Controllers\Admin\PermissionController;
use App\Http\Controllers\Admin\BannerController;
use App\Http\Controllers\Admin\AboutController;
use App\Http\Controllers\Admin\BookingController;
use App\Http\Controllers\Admin\ServiceRecordController;
use App\Http\Controllers\Admin\EmergencyBreakDownController;
use App\Http\Controllers\Admin\RatingController;
use App\Http\Controllers\Admin\SlotController;
use App\Http\Controllers\Admin\SocialiteController;
use App\Http\Controllers\Admin\TeamController;
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\Admin\WorkshopImgController;
use App\Http\Controllers\Auth\ForgotPasswordController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\ResetPasswordController;
use App\Http\Controllers\User\CheckoutController;
use App\Http\Controllers\User\PageController;
use App\Http\Controllers\User\ProfileController;
use App\Models\Contact;
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
Route::get('/home', [PageController::class, 'home'])->name('home');
Route::get('/aboutework', [PageController::class, 'about'])->name('aboutework');
Route::get('/workshop-service', [PageController::class, 'service'])->name('workshop-service');
Route::get('/workshop-single/{id}', [PageController::class, 'singleWorkshop'])->name('single.workshop');
Route::get('/contact', [PageController::class, 'contact'])->name('contact');
Route::get('/popularworkshop',[WorkShopController::class,'popularWorkshop'])->name('popular');



Route::get("/serviceName/{id}", [ServiceController::class, 'serviceName']);

Route::resource('userprofile', ProfileController::class);

Route::resource('emergency', EmergencyBreakDownController::class);


Route::get('/notification',[UserController::class,'notify']);

Route::post('/mark-as-read',[AdminController::class,'markNotification'])->name('markNotification');

Route::get('/forgotpassword',[ForgotPasswordController::class,'forgotpassword']);
Route::post('/reset',[ForgotPasswordController::class,'reset']);

Route::get('/reset_password/{id}',[ResetPasswordController::class,'changepassword'])->name('reset_password');
Route::post('/update_password',[ResetPasswordController::class,'passwordUpdate'])->name('update.password');

Route::get('/delete_single_image/{id}',[WorkshopImgController::class,'destroy'])->name('image.destroy');



//Socialite login route

//Google Route
Route::get('login/google',[SocialiteController::class, 'redirectToGoogle'])->name('login.google');
Route::get('auth/login/google/callback',[SocialiteController::class, 'loginWithGoogle']);

//Facebook Route

// Route::get('login/facebook',[SocialiteController::class, 'redirectToFacebook'])->name('login.facebook');
// Route::get('login/facebook/callback',[SocialiteController::class, 'handleFacebookCallBack']);

// contact store route

Route::post('/contactstore',[PageController::class,'contactStore'])->name('contact.store');
Route::get('admin/contactqueries',[PageController::class,'index'])->name('contact.index');
Route::post('admin/contact/{id}',[PageController::class,'contactdestroy']);







Route::get('/show-calendar',[WorkShopController::class,'calender'])->name('show.calender');

Route::get('/slot-create/{id}',[SlotController::class,'create_slot'])->name('create.slot');

Auth::routes(['verify'=>true]);
//routes for admins pannel
Route::group(['middleware' => ['auth']], function () {

    Route::get('/admin', [AdminController::class, 'dashbord'])->name('admin');
    Route::resource('shop', WorkShopController::class);
    Route::resource('user', UserController::class);


    // Route::resource('shop', ControllersWorkShopController::class);
    Route::resource('booking', BookingController::class);

    Route::resource('vehicle', VehicleController::class);

    Route::resource('servicebook', ServiceBookController::class);

    Route::resource('service', ServiceController::class);

    Route::resource('serviceRecord', ServiceRecordController::class);


    // Role and Permission route

    Route::resource('role', RoleController::class);

    Route::resource('permission', PermissionController::class);

    //Banner Route

    Route::resource('banner', BannerController::class);
    //About  Route

    Route::resource('about', AboutController::class);

    // team route
    Route::resource('team',TeamController::class);

    //rating route

    Route::resource('rating',RatingController::class);

    //slot route
    Route::resource('slot',SlotController::class);

    //checkout route
    Route::resource('checkout',CheckoutController::class);

});
