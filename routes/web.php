<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

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

Route::get('/','WelcomeController@index')->name('welcome');
Route::get('/about','WelcomeController@about')->name('about');


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::resource('/users','UsersController');
Route::resource('/categories','CategoriesController');
Route::resource('/products','ProductsController');

Route::get('/shop','ShopController@index')->name('shop');


