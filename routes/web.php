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
Auth::routes();



Route::get('/', function () {
    return view('shop.index');
});
Route::get('login/google', 'Auth\LoginController@redirectToProvider');
Route::get('login/google/callback', 'Auth\LoginController@handleProviderCallback');

Route::get('/home', 'HomeController@index')->name('home');
Route::prefix('admin')->group(function(){

		Route::get('dashboard', 'DashboardController@index')->name('home');
		Route::get('login', 'Admin\LoginController@showLoginForm')->name('admin.login');
		Route::post('login', 'Admin\LoginController@login');
		Route::post('logout', 'Admin\LoginController@logout')->name('admin.logout');

		// Registration Routes...
		Route::get('register', 'Admin\RegisterController@showRegistrationForm');
		Route::post('register', 'Admin\RegisterController@register')->name('admin.register');

		// Password Reset Routes...
		Route::get('password/reset', 'Admin\ForgotPasswordController@showLinkRequestForm')->name('admin.password.request');
		Route::post('password/email', 'Admin\ForgotPasswordController@sendResetLinkEmail')->name('admin.password.email');
		Route::get('password/reset/{token}', 'Admin\ResetPasswordController@showResetForm')->name('admin.password.reset');
		Route::post('password/reset', 'Admin\ResetPasswordController@reset');
		Route::middleware('auth')->group(function(){

		Route::get('/index1','ProductController@index')->name('index1'); 

		Route::prefix('users')->group(function(){
		    Route::get('/',function(){
		        return view('home');
		    });      
		    Route::get('/list','HomeController@getList')->name('admin.users');
		    Route::get('/{id}','HomeController@show');
		    Route::delete('/{id}','HomeController@destroy');
		    Route::put('/{id}','HomeController@update');
		    Route::post('/create','HomeController@create');
		});

		Route::prefix('manager')->group(function(){
			Route::get('/','AdminController@index')->name('manager.index');
			Route::get('product','ProductController@index')->name('manager.product');
			Route::get('listproduct','ProductController@getlist')->name('listproduct');
			Route::get('product/add','ProductController@create')->name('manager.product.add');
			Route::post('product/add','ProductController@store')->name('manager.product.add');
			Route::get('product/edit/{id}','ProductController@edit')->name('manager.product.edit');
			Route::post('product/edit/{id}','ProductController@update')->name('manager.product.update');
			Route::delete('product/destroy/{id}','ProductController@destroy')->name('product.destroy');

			Route::prefix('product-gallary')->group(function(){
				Route::get('/','ProductGallaryController@index')->name('manager.productGallary');
				Route::get('listgallaryproduct','ProductGallaryController@getlist')->name('listgallaryproduct1');
				Route::get('add','ProductGallaryController@create')->name('manager.productGallary.add');
				Route::post('add','ProductGallaryController@store')->name('manager.productGallary.add');
				Route::get('edit/{id}','ProductGallaryController@edit')->name('manager.productGallary.edit');
				Route::post('update/{id}','ProductGallaryController@update')->name('manager.productGallary.update');
				Route::delete('destroy/{id}','ProductGallaryController@destroy')->name('productGallary.destroy');
			});

			Route::prefix('productdetail')->group(function(){
				Route::get('/','ProductDetailController@index')->name('manager.productdetail');
				Route::get('listproductdetail','ProductDetailController@getlist')->name('listgallaryproduct');
				Route::get('add','ProductDetailController@create')->name('manager.productdetail.add');
				Route::post('add','ProductDetailController@store')->name('manager.productdetail.add');
				Route::get('edit/{id}','ProductDetailController@edit')->name('manager.productdetail.edit');
				Route::post('update/{id}','ProductDetailController@update')->name('manager.productdetail.update');
				Route::delete('destroy/{id}','ProductDetailController@destroy')->name('productdetail.destroy');
			});


			Route::prefix('order')->group(function(){
				Route::get('/','OrderController@index')->name('manager.order');
				Route::get('listorder','OrderController@getlist')->name('listorder');
				Route::get('add','OrderController@create')->name('manager.order.add');
				Route::post('add','OrderController@store')->name('manager.order.add');
				Route::get('edit/{id}','OrderController@edit')->name('manager.order.edit');
				Route::post('update/{id}','OrderController@update')->name('manager.order.update');
				Route::delete('destroy/{id}','OrderController@destroy')->name('order.destroy');
			});
			Route::prefix('order_detail')->group(function(){
				Route::get('/','OrderDetailController@index')->name('manager.order_detail');
				Route::get('listorder_detail','OrderDetailController@getlist')->name('listorder_detail');
				Route::get('add','OrderDetailController@create')->name('manager.order_detail.add');
				Route::post('add','OrderDetailController@store')->name('manager.order_detail.add');
				Route::get('edit/{id}','OrderDetailController@edit')->name('manager.order_detail.edit');
				Route::post('update/{id}','OrderDetailController@update')->name('manager.order_detail.update');
				Route::delete('destroy/{id}','OrderDetailController@destroy')->name('order_detail.destroy');
			});

			Route::prefix('promotion')->group(function(){
				Route::get('/','PromotionController@index')->name('manager.promotion');
				Route::get('listpromotion','PromotionController@getlist')->name('listpromotion');
				Route::get('add','PromotionController@create')->name('manager.promotion.add');
				Route::post('add','PromotionController@store')->name('manager.promotion.add');
				Route::get('edit/{id}','PromotionController@edit')->name('manager.promotion.edit');
				Route::post('update/{id}','PromotionController@update')->name('manager.promotion.update');
				Route::delete('destroy/{id}','PromotionController@destroy')->name('promotion.destroy');
			});


			Route::prefix('customer')->group(function(){
				Route::get('/','CustomerController@index')->name('manager.customer');
				Route::get('listcustomer','CustomerController@getlist')->name('listcustomer');
				Route::get('add','CustomerController@create')->name('manager.customer.add');
				Route::post('add','CustomerController@store')->name('manager.customer.add');
				Route::get('edit/{id}','CustomerController@edit')->name('manager.customer.edit');
				Route::post('update/{id}','CustomerController@update')->name('manager.customer.update');
				Route::delete('destroy/{id}','CustomerController@destroy')->name('customer.destroy');
			});

			Route::prefix('orderdetail')->group(function(){
				Route::get('/','OrderDetailController@index')->name('manager.orderdetail');
				Route::get('listorderdetail','OrderDetailController@getlist')->name('listorderdetail');
				Route::get('add','OrderDetailController@create')->name('manager.orderdetail.add');
				Route::post('add','OrderDetailController@store')->name('manager.orderdetail.add');
				Route::get('edit/{id}','OrderDetailController@edit')->name('manager.orderdetail.edit');
				Route::post('update/{id}','OrderDetailController@update')->name('manager.orderdetail.update');
				Route::delete('destroy/{id}','OrderDetailController@destroy')->name('orderdetail.destroy');
			});
		});
	});
});