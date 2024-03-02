<?php

use Illuminate\Support\Facades\Route;

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
// home 
Route::get('/home', 'App\Http\Controllers\HomeController@index')->name("home.index");
Route::get('', 'App\Http\Controllers\HomeController@index')->name("home.index");
Route::get('/about', 'App\Http\Controllers\HomeController@about')->name("home.about");
// product 
Route::get('/products','App\Http\Controllers\ProductController@index')->name("product.index");
Route::get('/products/{id}','App\Http\Controllers\ProductController@show')->name("product.show");
Route::get('/search','App\Http\Controllers\ProductController@search')->name("product.search");

// admin 
Route::middleware('admin')->group(function () {
    Route::get('/admin','App\Http\Controllers\Admin\AdminHomeController@index')->name("admin.home.index");
    Route::get('/admin/products','App\Http\Controllers\Admin\AdminProductController@index')->name("admin.product.index");
    Route::post("/admin/products/store","App\Http\Controllers\Admin\AdminProductController@store")->name("admin.product.store");
    Route::delete('/admin/products/{id}/delete','App\Http\Controllers\Admin\AdminProductController@delete')->name("admin.product.delete");
    Route::get('/admin/products/{id}/edit','App\Http\Controllers\Admin\AdminProductController@edit')->name("admin.product.edit");
    Route::put('/admin/products/{id}/update','App\Http\Controllers\Admin\AdminProductController@update')->name("admin.product.update");

    // admin user 
    Route::get('/admin/user','App\Http\Controllers\Admin\AdminUserController@index')->name("admin.user.index");
    Route::delete('/admin/user/{id}/delete','App\Http\Controllers\Admin\AdminUserController@delete')->name("admin.user.delete");
    Route::get('/admin/user/{id}/edit','App\Http\Controllers\Admin\AdminUserController@edit')->name("admin.user.edit");
    Route::put('/admin/user/{id}/update','App\Http\Controllers\Admin\AdminUserController@update')->name("admin.user.update");
    // admin order
    Route::get('/admin/category','App\Http\Controllers\Admin\AdminCatarogyController@index')->name("admin.category.index");
    Route::delete('/admin/category/{id}/delete','App\Http\Controllers\Admin\AdminCatarogyController@delete')->name("admin.category.delete");
    Route::get('/admin/category/{id}/edit','App\Http\Controllers\Admin\AdminCatarogyController@edit')->name("admin.category.edit");
    Route::post("/admin/caterogy/store","App\Http\Controllers\Admin\AdminCatarogyController@store")->name("admin.category.store");
    Route::put('/admin/category/{id}/update','App\Http\Controllers\Admin\AdminCatarogyController@update')->name("admin.category.update");
});
// cart 
Route::get('/cart','App\Http\Controllers\CartController@index')->name("cart.index");
Route::get('/cart/delete','App\Http\Controllers\CartController@delete')->name("cart.delete");
Route::delete('/cart/remove/{id}', 'App\Http\Controllers\CartController@remove')->name('cart.remove');
Route::post('/cart/add/{id}','App\Http\Controllers\CartController@add')->name("cart.add");

Route::middleware('auth')->group(function () {
    Route::get('/cart/purchase', 'App\Http\Controllers\CartController@purchase')->name("cart.purchase"); 
    Route::get('/my-account/orders', 'App\Http\Controllers\MyAccountController@orders')->name("myaccount.orders");
});



Auth::routes();

// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
