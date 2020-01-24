<?php
/**

	TODO:
	- index page Routes

 */


Route::get('/', 'user\FrontController@index');
Route::get('/menu', 'user\FrontController@menu');
/**

	TODO:
	- Pages Routes

 */

Route::get('/offers', function(){
	return view('user.pages.offers');
})->name('offers');
Route::get('/contact', function(){
	return view('user.pages.contact');
})->name('contact');
Route::get('/about', function(){
	return view('user.pages.about');
})->name('about');
Route::get('/services', function(){
	return view('user.pages.services');
})->name('services');
Route::get('/gallery', function(){
	return view('user.pages.gallery');
})->name('gallery');
Route::get('/reviews', function(){
	return view('user.pages.reviews');
})->name('reviews');
Route::get('/faqs', function(){
	return view('user.pages.faq');
})->name('faq');

/**
	TODO:
	- Cart Routes
	- Order Tracking Routes
 */

Route::post('/cart', 'user\CartController@store')->name('cart');
Route::get('/cart', 'user\CartController@index')->name('cart.page');
Route::patch('/cart/update/{dish}', 'user\CartController@update')->name('cart.update');
Route::delete('remove/{dish}', 'user\CartController@destroy')->name('dish.remove');

Route::group(['middleware' => 'auth'], function() {
	Route::get('/checkout', 'user\CheckoutController@index')->name('checkout');
	Route::get('/tracking/order', 'user\FrontController@show')->name('track');
	Route::get('user/order/{id}', 'user\FrontController@orderDetails')->name('user.order');
	Route::post('/checkout', 'user\CheckoutController@store');
	Route::get('/confirm', 'user\CheckoutController@confirm')->name('confirmation');
});

/**
	TODO:
	- Auth ROutes
 */

Auth::routes();

/**

	TODO:
	- Admin Dashboard
	- Routes

 */

Route::group(['middleware' => 'auth'], function() {
  Route::group(['middleware' => 'admin'], function() {
	Route::get('/home', 'HomeController@index')->name('home');
	Route::resource('dishes', 'admin\DishesController');
	Route::resource('categories', 'admin\CategoriesController');
	Route::get('/orders', 'admin\OrdersController@index')->name('orders');
	Route::get('/orders/details/{id}', 'admin\OrdersController@show')->name('details');
	Route::get('/order/confirm/{id}', 'admin\OrdersController@confirm')->name('confirm');
	Route::get('/order/cancel/{id}', 'admin\OrdersController@cancel')->name('cancel');
	Route::get('/order/remove/{id}', 'admin\OrdersController@remove')->name('remove');
	}); 
});

