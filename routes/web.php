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

Route::get('/', function () {
    return view('index');
});

Route::get('/admin', function(){
    return view('dashboard.index');
});

Route::get('/admin/promosi', function(){
    return view('dashboard.promosi');
});

Route::get('/admin/pesawat', function(){
    return view('dashboard.pesawat');
});

Route::get('/admin/hotel', function(){
    return view('dashboard.hotel');
});
