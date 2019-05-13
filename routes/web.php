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
Route::get('/inner-circle', 'HomeController@innerCircleStore')->name('inner-circle')->middleware('can:viewInnerCircle');


Route::prefix('admin')->middleware('auth','admin')->group(function () {
    Route::get('/', 'AdminController@index')->name('admin.dashboard');
//    Route::get('/login','AdminController@showLoginForm')->name('admin.login');
//    Route::post('/login','AdminController@login')->name('admin.login.submit');
    Route::resource('products', 'ProductsController');
});

Route::prefix('account')->middleware('auth')->group(function (){
    Route::get('/','UserAccountController@showUserAccount')->name('account');
    Route::get('/orders','UserAccountController@showUserOrders')->name('orders');
    Route::get('/subscriptions','UserAccountController@showUserSubscriptions')->name('subscriptions');
    Route::get('/cards','UserAccountController@showUserCards')->name('cards');
});


Route::get('/checkout', ['as' => 'checkout', 'uses' => 'CashierSubscriptionController@index'])->middleware('auth');
Route::post('/payment', ['as' => 'payment', 'uses' => 'CashierSubscriptionController@userPayForSubscription'])->middleware('auth');


//Route::post(
//    'stripe/webhook',
//    '\Laravel\Cashier\Http\Controllers\WebhookController@handleWebhook'
//);


