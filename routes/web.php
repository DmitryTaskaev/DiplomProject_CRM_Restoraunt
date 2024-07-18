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

use Illuminate\Support\Facades\Auth;


//Страницы заказа блюд

Route::get('/', 'IndexController@index')->name('indexPage');

//Авторизация
Route::get('/auth', 'AuthorizationController@view')->name('login');
Route::post('/auth', 'AuthorizationController@login')->name('login');
Route::get('/auth', 'AuthorizationController@view')->name('login');

//Регистрация
Route::get('/registration', 'RegistrationController@view')->middleware('guest')->name('registration');
Route::post('/registration', 'RegistrationController@register')->middleware('guest');

Route::get('/forgot-password', 'ForgotPasswordController@view')->name('forgot-password');

//Страницы
Route::get('/panel', 'MainController@index')->middleware('auth')->name('index');

//Пользователи/клиенты
Route::get('/users', 'UserController@index')->middleware('auth')->name('users');
Route::get('/clients', 'ClientsController@index')->middleware('auth')->name('clietns');

//CRUD
Route::resource('category', 'Admin\CategoryController')->middleware('auth');
Route::resource('product', 'Admin\ProductController')->middleware('auth');
Route::resource('client', 'Operator\ClientController')->middleware('auth');
Route::resource('orders', 'Operator\OrdersController')->middleware('auth');
Route::resource('courier', 'Operator\CourierController')->middleware('auth');
Route::resource('myorders', 'Courier\MyOrderController')->middleware('auth');
