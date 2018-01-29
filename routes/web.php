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
    return view('home');
    // return redirect('comingsoon');
});

Route::view('/contact', 'contact');

Route::view('/service', 'service');

Route::view('/products', 'products');

Route::view('/equipment', 'equipment');

Route::view('/partners', 'partners');

Route::resource('inquiry', 'InquiryController', ['except' => ['create']]);
