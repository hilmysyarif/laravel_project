<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::resource('about_us','HomeController@about_us');
Route::resource('sliders','HomeController@sliders');
Route::resource('brands','HomeController@brands');
Route::resource('products','HomeController@products');
Route::resource('product-category','HomeController@product_category');
Route::resource('clients','HomeController@clients');
Route::resource('news','HomeController@news');
Route::resource('news-category','HomeController@news_category');
