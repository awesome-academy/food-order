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
	Route::group(['prefix' => 'food'], function()
	{
	    Route::get('list', 'FoodController@getList')->name('listFood');
	    Route::get('add', 'FoodController@getAdd')->name('addFood');
	    Route::post('add', 'FoodController@postAdd');
	    Route::get('edit/{id}', 'FoodController@getEdit')->name('editFood');
	    Route::post('edit/{id}', 'FoodController@postEdit');
	    Route::get('delete/{id}', 'FoodController@getDelete')->name('deleteFood');
	});
	Route::group(['prefix' => 'store'], function()
	{
	    Route::get('list', 'StoreController@getList')->name('listStore');
	    Route::get('add', 'StoreController@getAdd')->name('addStore');
	    Route::post('add', 'StoreController@postAdd');
	    Route::get('edit/{id}', 'StoreController@getEdit')->name('editStore');
	    Route::post('edit/{id}', 'StoreController@postEdit');
	    Route::get('delete/{id}', 'StoreController@getDelete')->name('deleteStore');
	});
	Route::group(['prefix' => 'user'], function()
	{
	    Route::get('list', 'UserController@getList')->name('listUser');
	    Route::get('add', 'UserController@getAdd')->name('addUser');
	    Route::post('add', 'UserController@postAdd');
	    Route::get('edit/{id}', 'UserController@getEdit')->name('editUser');
	    Route::post('edit/{id}', 'UserController@postEdit');
	    Route::get('delete/{id}', 'UserController@getDelete')->name('deleteUser');
	});
});
