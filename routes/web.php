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

  Route::resource('/news', 'NewsController', [
      'names' => [
        'index' => 'backend.news.index',
        'edit' => 'backend.news.edit',
        'create' => 'backend.news.create',
        'store' => 'backend.news.store',
        'update' => 'backend.news.update',
        'delete' => 'backend.news.delete'
      ]
    ]);

  Route::resource('/newscategories', 'NewsCategoriesController', [
    'names' => [
      'index' => 'backend.newscategories.index',
      'edit' => 'backend.newscategories.edit',
      'create' => 'backend.newscategories.create',
      'store' => 'backend.newscategories.store',
      'update' => 'backend.newscategories.update',
      'delete' => 'backend.newscategories.destroy'
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
        'index' => 'backend.brands.index',
        'create' => 'backend.brands.create',
        'store' => 'backend.brands.store',
        'edit' => 'backend.brands.edit',
        'update' => 'backend.brands.update',
        'destroy' => 'backend.brands.destroy',
      ]
    ]);

    // Product
    Route::resource('/{product_id}/brands/{brand_id}/products', 'ProductsController', [
      'names' => [
        'index' => 'backend.products.index',
        'create' => 'backend.products.create',
        'store' => 'backend.products.store',
        'edit' => 'backend.products.edit',
        'update' => 'backend.products.update',
        'destroy' => 'backend.products.destroy'
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
