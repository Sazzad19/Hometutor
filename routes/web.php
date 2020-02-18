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

Route::get('/','User\PageController@index')->name('index');

Route::get('/contact','User\PageController@contact')->name('contact');



/*
Products Route
All the routes for our products for users
*/

Route::get('/products','User\ProductController@index')->name('products');
Route::get('/products/{slug}','User\ProductController@show')->name('products.show');
Route::get('/search','User\PageController@search')->name('search');


//Admin Routes
Route::group(['prefix'=>'admin'],function(){

Route::get('/','Admin\PageController@index')->name('admin.index');

//Admin Product Routes

Route::get('/products/create','Admin\ProductController@create')->name('admin.products.create');

Route::post('/products/store','Admin\ProductController@store')->name('admin.products.store');
Route::get('/products','Admin\ProductController@index')->name('admin.products');
Route::get('/products/edit/{id}','Admin\ProductController@edit')->name('admin.products.edit');
Route::post('/products/update/{id}','Admin\ProductController@update')->name('admin.products.update');
Route::post('/products/delete/{id}','Admin\ProductController@delete')->name('admin.products.delete');


Route::get('/catagory/create','Admin\CatagoryController@create')->name('admin.catagory.create');

Route::post('/catagory/store','Admin\CatagoryController@store')->name('admin.catagory.store');
Route::get('/catagory','Admin\CatagoryController@index')->name('admin.catagory');
Route::get('/catagory/edit/{id}','Admin\CatagoryController@edit')->name('admin.catagory.edit');
Route::post('/catagory/update/{id}','Admin\CatagoryController@update')->name('admin.catagory.update');
Route::post('/catagory/delete/{id}','Admin\CatagoryController@delete')->name('admin.catagory.delete');

 

Route::get('/brand/create','Admin\BrandController@create')->name('admin.brand.create');

Route::post('/brand/store','Admin\BrandController@store')->name('admin.brand.store');
Route::get('/brand','Admin\BrandController@index')->name('admin.brand');
Route::get('/brand/edit/{id}','Admin\BrandController@edit')->name('admin.brand.edit');
Route::post('/brand/update/{id}','Admin\BrandController@update')->name('admin.brand.update');
Route::post('/brand/delete/{id}','Admin\BrandController@delete')->name('admin.brand.delete');

});






