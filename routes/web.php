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
//Route::get('/admin/users', 'AdminController@users')->name('users');
//Route::get('/admin/user/{id}', 'AdminController@user')->name('user');
//Route::get('/admin/{any}', 'AdminController@index')->where('any', '.*');
