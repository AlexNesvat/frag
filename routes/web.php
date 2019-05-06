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
Route::get('/admin/products/create', 'ProductsController@create')->name('create.product');
//Route::get('/admin/product/create', function () {
//    dd('fsdfsdfs');
//    return view('admin.products');
//});
Route::get('/admin/products/{id}', 'ProductsController@edit')->name('product');


Route::post('/admin/products/', 'ProductsController@store')->name('store.product');
Route::put('/admin/products/{id}', 'ProductsController@update')->name('edit.product');





Route::delete('/admin/products/{id}', 'ProductsController@destroy')->name('delete.product');

Route::get('/checkout', ['as'=>'checkout','uses'=>'CashierSubscriptionController@index']);
Route::post('/payment',['as'=>'payment','uses'=>'CashierSubscriptionController@userPayForSubscription']);

//Route::resource('products', 'ProductsController');

//Route::post(
//    'stripe/webhook',
//    '\Laravel\Cashier\Http\Controllers\WebhookController@handleWebhook'
//);


//Route::get('/admin/users', 'AdminController@users')->name('users');
//Route::get('/admin/user/{id}', 'AdminController@user')->name('user');
//Route::get('/admin/{any}', 'AdminController@index')->where('any', '.*');
