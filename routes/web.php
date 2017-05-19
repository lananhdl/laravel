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
Route::get('list','SanphamController@lists')->name('list');
Route::get('add','SanphamController@add');
Route::post('add','SanphamController@add_database');
Route::get('delete/{id}','SanphamController@destroy')->name('destroy');
Route::get('edit/{id}','SanphamController@edit')->name('edit');
Route::post('edit/{id}','SanphamController@update')->name('update');


Route::get('listkhachhang','KhachhangController@danhsach')->name('danhsach');
Route::get('them','KhachhangController@them')->name('them');
Route::post('them','KhachhangController@them_database')->name('them_databse');
Route::get('xoa/{id}','KhachhangController@xoa')->name('xoa');
Route::get('sua/{id}','KhachhangController@sua')->name('sua');
Route::post('sua/{id}','KhachhangController@sua_database')->name('sua_database');


Route::get('list-thanh-vien', 'ThanhvienController@index')->name('list-thanh-vien');
Route::get('add-thanh-vien', 'ThanhvienController@create')->name('create');
Route::post('add-thanh-vien', 'ThanhvienController@store');
Route::get('delete-thanh-vien/{id}', 'ThanhvienController@destroy')->name('delete-thanh-vien');
Route::get('edit-thanh-vien/{id}','ThanhvienController@edit')->name('edit');
Route::post('edit-thanh-vien/{id}','ThanhvienController@update')->name('update');


Route::get('list-news', 'TinController@index')->name('list-news');
Route::get('add-news', 'TinController@create');
Route::post('add-news', 'TinController@store');
Route::get('delete-news/{id}', 'TinController@destroy')->name('destroy');
Route::get('edit-news/{id}','TinController@edit')->name('edit');
Route::post('edit-news/{id}','TinController@update')->name('update');
Route::get('trang-chu','TinController@trangchu')->name('trang-chu');






