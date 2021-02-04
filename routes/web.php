<?php

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
//     return view('index');
// });

use App\User;

Route::resource('/', 'homeController');
Route::resource('/AccountMobile', 'AccountMobileController');
Route::resource('/pesawat', 'homePesawatController');

Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');
Route::middleware(['role'])->group(function (){
    Route::get('/admin', function(){
        return view('dashboard.index');
    });
    Route::resource('/admin/pesawat', 'PesawatController');
    Route::resource('/admin/bannerWeb', 'BannerControllerWeb');
    Route::resource('/admin/bannerMobile', 'BannerControllerMobile');
    Route::resource('/admin/promotion', 'promoController');
    Route::resource('/admin/AdminUser', 'AdminUserController');
    Route::resource('/admin/CustomerUser', 'CustomerUserController');
});


