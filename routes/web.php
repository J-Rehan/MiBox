<?php

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

use App\Http\Controllers\PageController;
use App\Http\Controllers\Admin\AuthController;
use App\Http\Controllers\Admin\DashboardController;

Route::get('emailTest', [PageController::class,'emailTest']);

Route::get('/', [PageController::class, 'index']);
Route::get('/page/{id}', [PageController::class,'show']);
Route::get('home', [PageController::class,'show']);
Route::get('add-on', [PageController::class,'AddOn']);
Route::get('delivery-information', [PageController::class,'delivery_information'])->name("delivery_information");
Route::get('thank-you', [PageController::class,'thank_you'])->name("thank_you");
Route::get('email', [PageController::class,'email'])->name("email");
Route::get('exports',[PageController::class,'exportPincodes'])->name('exports');


Route::group(['namespace' => 'Admin', 'as' => 'admin.', 'prefix' => 'admin'], function() {

    Route::get('login', [AuthController::class, 'loginForm'])->name('auth.loginForm');
    Route::post('login', [AuthController::class, 'login'])->name('auth.login');
    Route::get('forget-password', [AuthController::class, 'forgetPassswordForm'])->name('auth.forgetPassswordForm');
    Route::get('reset-password/{token}', [AuthController::class, 'showResetPasswordForm'])->name('reset.password.get');

    Route::group(['prefix' => '','middleware' => 'admin'],function() {
        Route::get('dashboard', [DashboardController::class, 'index'])->name('dashboard.index');
        Route::get('zipcode', [DashboardController::class, 'zipcode'])->name('dashboard.zipcode');
        Route::get('extras', [DashboardController::class, 'extras'])->name('dashboard.extras');
        Route::get('calendar', [DashboardController::class, 'calendar'])->name('dashboard.calendar');
        Route::get('calendars', [DashboardController::class, 'calendar'])->name('profile.index');
        Route::post('logout', [DashboardController::class, 'logout'])->name("logout");
    });
});
