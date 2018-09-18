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

  // Product Category
  Route::group(['prefix' => 'products'], function () {
    Route::resource('/', 'ProductCategoryController', [
      'names' => [
        'index' => 'product.index',
        'edit' => 'product.edit',
        'update' => 'product.update',
        'delete' => 'product.delete'
      ]
    ]);

    // Product Brands
    Route::resource('/{product_id}/brands', 'ProductBrandsController');
  });


});
