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
    return view('main');
});




Auth::routes();


Route::get('/home', 'HomeController@index')->name('home');

Route::get('/admin', 'AdminController@index')->name('admin');

Route::get('/admin/products', 'ProductsController@index')->name('products');
Route::get('/admin/product/create', 'ProductsController@create')->name('create.product');
//Route::get('/admin/product/create', function () {
//    dd('fsdfsdfs');
//    return view('admin.products');
//});
Route::get('/admin/product/{id}', 'ProductsController@edit')->name('product');


Route::post('/admin/product/', 'ProductsController@store')->name('store.product');
Route::put('/admin/product/{id}', 'ProductsController@update')->name('edit.product');





Route::delete('/admin/product/{id}', 'ProductsController@destroy')->name('delete.product');

//Route::resource('products', 'ProductsController');




//Route::get('/admin/users', 'AdminController@users')->name('users');
//Route::get('/admin/user/{id}', 'AdminController@user')->name('user');
//Route::get('/admin/{any}', 'AdminController@index')->where('any', '.*');
