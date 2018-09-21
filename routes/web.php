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

  // Sliders
  Route::resource('/sliders', 'SlidersController', [
    'names' => [
      'index' => 'backend.slider.index',
      'edit' => 'backend.slider.edit',
      'create' => 'backend.slider.create',
      'store' => 'backend.slider.store',
      'update' => 'backend.slider.update',
      'delete' => 'backend.slider.destroy'
    ]
  ]);

  // Enterprise
  Route::resource('/enterprise', 'EnterpriseController', [
    'names' => [
      'index' => 'backend.enterprise.index',
      'edit' => 'backend.enterprise.edit',
      'create' => 'backend.enterprise.create',
      'store' => 'backend.enterprise.store',
      'update' => 'backend.enterprise.update',
      'delete' => 'backend.enterprise.destroy'
    ]
  ]);

  // enterpriseBox
  Route::resource('/enterpriseBox', 'EnterpriseBoxController', [
    'names' => [
      'index' => 'backend.enterpriseBox.index',
      'edit' => 'backend.enterpriseBox.edit',
      'create' => 'backend.enterpriseBox.create',
      'store' => 'backend.enterpriseBox.store',
      'update' => 'backend.enterpriseBox.update',
      'delete' => 'backend.enterpriseBox.destroy'
    ]
  ]);

  // News and Category
  Route::group(['prefix' => 'news'], function () {
    Route::resource('/', 'NewsController', [
      'names' => [
        'index' => 'backend.news.index',
        'edit' => 'backend.news.edit',
        'create' => 'backend.news.create',
        'store' => 'backend.news.store',
        'update' => 'backend.news.update',
        'delete' => 'backend.news.delete'
      ]
    ]);

    Route::resource('/categories', 'NewsCategoriesController', [
      'names' => [
        'index' => 'backend.news.categories.index',
        'edit' => 'backend.news.categories.edit',
        'create' => 'backend.news.categories.create',
        'store' => 'backend.news.categories.store',
        'update' => 'backend.news.categories.update',
        'delete' => 'backend.news.categories.destroy'
      ]
    ]);
  });

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


  Route::resource('/aboutus', 'AboutUsController', [
    'names' => [
      'index' => 'aboutus.index',
      'create' => 'aboutus.create',
      'store' => 'aboutus.store',
      'edit' => 'aboutus.edit',
      'update' => 'aboutus.update',
      'delete' => 'aboutus.delete'
    ]
  ]);

});
