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
    return view('welcome');
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
				Route::get('listgallaryproduct','ProductGallaryController@getlist')->name('listgallaryproduct');
				Route::get('add','ProductGallaryController@create')->name('manager.productGallary.add');
				Route::post('add','ProductGallaryController@store')->name('manager.productGallary.add');
				Route::get('edit/{id}','ProductGallaryController@edit')->name('manager.productGallary.edit');
				Route::post('update/{id}','ProductGallaryController@update')->name('manager.productGallary.update');
				Route::delete('destroy/{id}','ProductGallaryController@destroy')->name('productGallary.destroy');
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
		});
	});
});