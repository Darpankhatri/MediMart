<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\GenericController;
use App\Http\Controllers\IndexController;
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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', [IndexController::class, 'index'])->name('web.index');
Route::get('/web-login', [IndexController::class, 'web_login'])->name('web.login');
Route::post('/user-login', [IndexController::class, 'user_login'])->name('user.login');
Route::get('/web-register', [IndexController::class, 'web_register'])->name('web.register');
Route::post('/user-register', [IndexController::class, 'user_register'])->name('user.register');
Route::post('/web-reset', [IndexController::class, 'web_reset'])->name('web.reset');
Route::get('/account-registerd/{email}', [IndexController::class, 'account_registerd'])->name('account.registerd');
Route::get('/user-active-account', [IndexController::class, 'active_account'])->name('user.active');


Route::group(['middleware' => 'IsAdmin'], function()
{
    Route::get('dashboard', [HomeController::class, 'dashboard'])->name('dashboard');

    Route::get('/user-profile', [HomeController::class, 'user_profile'])->name('user.profile');
    Route::post('/update-profile', [HomeController::class, 'update_profile'])->name('update.profile');
    Route::get('/change-password', [HomeController::class, 'change_password'])->name('change.password');
    Route::post('/update-password', [HomeController::class, 'update_password'])->name('update.password');

    // data tables
    Route::get('/products',[GenericController::class, 'product'])->name('product');


    Route::get('/attribute/{slug?}',[GenericController::class, 'attribute'])->name('attribute');
    Route::post('/delete-record',[GenericController::class, 'delete_record'])->name('delete.record');
    Route::post('/add-record/{slug?}',[GenericController::class, 'add_record'])->name('add.record');



    Route::get('web-config', [HomeController::class, 'web_config'])->name('web.config');
    Route::post('update-config', [HomeController::class, 'update_config'])->name('update.config');
    Route::get('web-logo', [HomeController::class, 'web_logo'])->name('web.logo');
    Route::post('update-logo', [HomeController::class, 'update_logo'])->name('update.logo');

    Route::get('confirm-mail', [HomeController::class, 'confirm_mail'])->name('confirm.mail');


});
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
