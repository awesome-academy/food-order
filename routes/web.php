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

Route::group(['prefix' => 'admin'], function()
{
    Route::group(['prefix' => 'category'], function()
	{
	    Route::get('list', 'categoryController@getList')->name('listCat');
	    Route::get('add', 'categoryController@getAdd')->name('addCat');
	    Route::post('add', 'categoryController@postAdd');
	    Route::get('edit/{id}', 'categoryController@getEdit')->name('editCat');
	    Route::post('edit/{id}', 'categoryController@postEdit');
	    Route::get('delete/{id}', 'categoryController@getDelete')->name('deleteCat');
	});
});
