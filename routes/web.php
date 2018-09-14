<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/


Route::get('/', 'FrontendController@index');


Auth::routes();

Route::group(['middleware' => ['web'], 'prefix' => 'backend'], function () {
  Route::get('/', 'HomeController@index');

  // Product Brands
  Route::resource('/product/{product_id}/brands', 'ProductBrandsController');
});
