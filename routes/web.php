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
Route::resource('/', 'homeController');
Route::resource('/pesawat', 'homePesawatController');
Route::get('/admin', function(){
    return view('dashboard.index');
});
Route::get('/admin/hotel', function(){
    return view('dashboard.hotel');
});
Route::resource('/admin/pesawat', 'PesawatController');
Route::resource('/admin/bannerWeb', 'BannerControllerWeb');
Route::resource('/admin/bannerMobile', 'BannerControllerMobile');
Route::resource('/admin/promotion', 'promoController');
