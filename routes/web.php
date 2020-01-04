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
Route::group([],function (){
    Route::get('/', 'HomeController@index')->name('home');
    Route::get('/جدید', 'rootController@create')->name('new');
    Route::post('/جدید', 'rootController@store');
    Route::get('/حذف/{id}', 'rootController@destroy')->name('delete');
    Route::get('/ویرایش/{id}', 'rootController@edit')->name('edit');
    Route::post('/ویرایش/{id}', 'rootController@update')->name('update');
    Route::get('/خاطره/{id}', 'rootController@show')->name('show');

});

