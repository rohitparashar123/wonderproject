<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;

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

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/','frontcontroller@index');

// account page routes

Route::get('/signup', 'UserController@index');
Route::post('/sign', 'UserController@doRegister');
Route::get('/signin','UserController@loginPage');
Route::post('/signin','UserController@dologin');
Route::get('/myaccount','UserController@myaccount');
Route::get('/myaccount/account-settings','UserController@accountSettings');
Route::get('/myaccount/orders','UserController@accountOrders');
Route::get('/myaccount/others','UserController@accountOthers');
Route::get('/user-details','UserController@userDetails');
Route::get('myaccount/change-password','UserController@changePwd');
Route::post('/change-pwd','UserController@changepassword');
Route::get('/delete-account/{id}','UserController@deleteAccount');

//faq page routes
Route::get('/faq','FrontController@faq');
Route::get('/recovery-document','FrontController@faqDocs');