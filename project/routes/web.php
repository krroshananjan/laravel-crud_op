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
Route::get('/Post','Postscontroller@index')->name('post.index');

Route::get('/post/details/{id}','Postscontroller@details')->name('post.details');
Route::get('/post/edit/{id}','Postscontroller@edit')->name('post.edit');
Route::get('/post/delete/{id}','Postscontroller@delete')->name('post.delete');
Route::get('/post/add','Postscontroller@add')->name('post.add');
Route::post('/post/insert','Postscontroller@insert')->name('post.insert');
Route::post('/post/update/{id}','Postscontroller@update')->name('post.update');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
