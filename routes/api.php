<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('viewcategories', 'categoryController@getCategory');
Route::post('insertcategory', 'categoryController@insertCategory');
Route::delete('deletecategory', 'categoryController@deleteCategory');
Route::put('updatecategory', 'categoryController@updateCategory');

Route::get('viewitems', 'itemController@getItems');
Route::post('insertitem', 'itemController@insertItems');
Route::delete('deleteitem', 'itemController@deleteItems');
Route::put('updateitem', 'itemController@updateItems');

Route::get('getitemjson/{id}', 'itemController@getItemJson');
Route::get('getcategoryjson/{id}', 'itemController@getCategoryJson');
