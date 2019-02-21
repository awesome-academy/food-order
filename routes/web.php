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
	    Route::get('list', 'CategoryController@getList')->name('listCat');
	    Route::get('add', 'CategoryController@getAdd')->name('addCat');
	    Route::post('add', 'CategoryController@postAdd');
	    Route::get('edit/{id}', 'CategoryController@getEdit')->name('editCat');
	    Route::post('edit/{id}', 'CategoryController@postEdit');
	    Route::get('delete/{id}', 'CategoryController@getDelete')->name('deleteCat');
	});
	Route::group(['prefix' => 'promotion'], function()
	{
	    Route::get('list', 'PromotionController@getList')->name('listSale');
	    Route::get('add', 'PromotionController@getAdd')->name('addSale');
	    Route::post('add', 'PromotionController@postAdd');
	    Route::get('edit/{id}', 'PromotionController@getEdit')->name('editSale');
	    Route::post('edit/{id}', 'PromotionController@postEdit');
	    Route::get('delete/{id}', 'PromotionController@getDelete')->name('deleteSale');
	});
});
