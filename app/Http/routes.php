<?php
// Admin routes

Route::get('/admin/no', 'AdminController@index');
Route::get('/admin/product/destroy/{id}', 'AdminController@destroy');
Route::get('/admin/new', 'AdminController@newProduct');
Route::post('/admin/product/save', 'AdminController@add');
Route::get('/admin/{id}/edit', 'AdminController@edit');
Route::get('/admin/change', 'AdminController@changeOrder');
///Route::patch('/admin/product/update/{id}', 'AdminController@update');

Route::put('/admin/products/update/{id}', 'AdminController@update');
//Route::resource('books','BookController');





Route::get('/', function () {
    return view ('welcome');
});


Route::get('/product', 'ProductController@index');//auth einai gia to welcome anazhthsh

Route::get('/allproducts', 'ProductController@all');
Route::get('/ring','ProductController@ri');

Route::get('/necklace','ProductController@neck');
Route::get('/earring','ProductController@ear');

// Authentication routes...
Route::get('/auth/login', 'Auth\AuthController@getLogin');
Route::post('/auth/login', 'Auth\AuthController@postLogin');
Route::get('/auth/logout', 'Auth\AuthController@getLogout');

// Registration routes...
Route::get('/auth/register', 'Auth\AuthController@getRegister');
Route::post('/auth/register', 'Auth\AuthController@postRegister');

Route::get('/auth/password/email', 'Auth\PasswordController@getEmail');
Route::post('/auth/password/email', 'Auth\PasswordController@postEmail');

// Password reset routes...
Route::get('password/reset/{token}', 'Auth\PasswordController@getReset');
Route::post('password/reset', 'Auth\PasswordController@postReset');

Route::get('/addProduct/{productId}/{productPrice}', 'CartController@addProduct');
Route::get('/deleteItem/{productId}', 'CartController@deleteItem');
Route::get('/cart', 'CartController@showCart');
Route::get('/decreaseItem/{productId}/{productPrice}', 'CartController@decreaseItem');
Route::get('/increaseItem/{productId}/{productPrice}', 'CartController@increaseItem');

Route::get('/checkout', 'OrderController@checkout');

Route::post('/order/save', 'OrderController@add');





 
//Route::get('/vieow/{orderId}', 'OrderController@viewOrder');

Route::get('/list', 'OrderController@index');
//Route::get('/alert', 'OrderController@add');
//Route::get('list', 'OrderController@index');




