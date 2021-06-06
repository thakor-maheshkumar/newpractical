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
Route::get('/home', 'HomeController@index')->name('home');
///  Route for Category  ///
Route::get('/category/index','CategoryController@index');
Route::get('/category/create','CategoryController@create');
Route::post('/category/store','CategoryController@store');

///Route for Product
Route::get('/product/index','ProductController@index');
Route::post('product/import','ProductController@import');
Route::post('search','ProductController@search');