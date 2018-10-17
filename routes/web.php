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
    return view('welcome');
});

Auth::routes();


Route::get('/home',[
    'uses'=> 'HomeController@index',
    'as' => 'home'
]);

Route::get('/foodStore', [
	'uses' => 'FrontEndController@index',
	'as' => 'food.index'

]);

Route::get('product/{id}', [
    'uses' => 'FrontEndController@singleProduct',
    'as' => 'product.single'
]);






Route::group(['middleware' => ['auth']], function() {
    Route::get('/cart/food_checkout', [
        'uses' => 'CheckoutController@index',
        'as' => 'cart.checkout'
    ]);
    Route::post('cart/food_checkout', [
        'uses' => 'CheckoutController@payment',
        'as' => 'cart.checkout'
    ]);

    Route::post('/cart/add', [
        'uses' => 'ShoppingController@add_to_cart',
        'as' => 'cart.add'
    ]);
    
    Route::get('cart/delete/{id}', [
        'uses' => 'ShoppingController@cart_delete',
        'as' => 'cart.delete'
    ]);
    
    Route::get('/cart', [
        'uses' => 'ShoppingController@cart',
        'as' => 'cart'
    ]);
    
    Route::get('cart/incr/{id}/{qty}', [
        'uses' => 'ShoppingController@incr',
        'as' => 'cart.incr'
    ]);
    
    Route::get('cart/rapid/add/{id}', [
        'uses' => 'ShoppingController@rapid_add',
        'as' => 'cart.rapid.add'
    ]);

    
    Route::get('cart/reduce/{id}/{qty}', [
        'uses' => 'ShoppingController@reduce',
        'as' => 'cart.red'
    ]);

    Route::get('/admin/index', [
        'uses' => 'AdminController@index',
        'as' => 'admin.index'
    ]);
    
    Route::get('/admin/users', [
        'uses' => 'DataTablesController@index',
        'as' => 'admin.users'
    ]);
    Route::get('/admin/users/edit/{id}', [
        'uses' => 'UserController@edit',
        'as' => 'admin.users.edit'
    ]);
    Route::get('/admin/users/show/{id}', [
        'uses' => 'UserController@show',
        'as' => 'admin.users.show'
    ]);
    Route::get('/admin/users/delete/{id}', [
        'uses' => 'UserController@destroy',
        'as' => 'admin.users.delete'
    ]);
    
    Route::get('admin/transactions', [
        'uses' => 'TransactionController@index',
        'as' => 'admin.transactions'
    ]);

    Route::get('admin/transactions/get_data', [
        'uses' => 'TransactionController@get_data',
        'as' => 'admin.transactions.getdata'
    ]);

    Route::get('admin/products', [
        'uses' => 'ProductsController@index',
        'as' => 'admin.products'
    ]);


    Route::post('admin/products/store', [
        'uses' => 'ProductsController@store',
        'as' => 'admin.products.store'
    ]);

    Route::get('admin/products/create', [
        'uses' => 'ProductsController@create',
        'as' => 'admin.products.create'
    ]);
    
    Route::get('admin/products/edit/{id}', [
        'uses' => 'ProductsController@edit',
        'as' => 'admin.products.edit'
    ]);
    Route::post('admin/products/update/{id}', [
        'uses' => 'ProductsController@update',
        'as' => 'admin.products.update'
    ]);
    
    Route::get('admin/products/delete/{id}', [
        'uses' => 'ProductsController@delete',
        'as' => 'admin.products.delete'
    ]);

});

