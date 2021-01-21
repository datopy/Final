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

use Illuminate\Http\Request;



Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');



Route::get('/guest', 'MainController@gindex')->name('gindex');

Route::get('/guest/show{id}', 'MainController@gshow')->name('gshow');

Route::post('/comment', 'MainController@comment')->name('comment');





Route::get('/admin/index', 'ProductsController@index')->name('index');

Route::get('/admin/add', 'ProductsController@add')->name('add');

Route::post('/admin/store', 'ProductsController@store')->name('store');

Route::get('/admin/show/{id}', 'ProductsController@show')->name('show');

Route::post('/admin/delete', 'ProductsController@delete')->name('delete');

Route::get('/admin/edit/{id}', 'ProductsController@edit')->name('edit');

Route::post('/admin/update', 'ProductsController@update')->name('update');


