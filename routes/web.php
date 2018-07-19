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
		});
	});
});