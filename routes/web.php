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

  // Customers
  Route::resource('/customers', 'CustomersController', [
    'names' => [
      'index' => 'customers.index',
      'edit' => 'customers.edit',
      'update' => 'customers.update',
      'delete' => 'customers.delete'
    ]
  ]);

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
    Route::resource('/{product_id}/brands', 'ProductBrandsController', [
      'names' => [
        'index' => 'brands.index',
        'create' => 'brands.create',
        'store' => 'brands.store',
        'edit' => 'brands.edit',
        'update' => 'brands.update',
        'delete' => 'brands.delete'
      ]
    ]);

    // Product
    Route::resource('/{product_id}/brands/{brand_id}/products', 'ProductsController', [
      'names' => [
        'index' => 'products.index',
        'create' => 'products.create',
        'store' => 'products.store',
        'edit' => 'products.edit',
        'update' => 'products.update',
        'delete' => 'products.delete'
      ]
    ]);


  });


});
