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

Route::group(['prefix' => 'auth'], function () {
    Route::post('login', 'AuthController@login');
    Route::post('logout', 'AuthController@logout');
    Route::post('refresh', 'AuthController@refresh');
    Route::post('me', 'AuthController@me');
});

/**
 * Stickers
 */
Route::prefix('stickers')->group(function () {
    Route::get('/', ['uses' => 'StickersController@index']);
    Route::get('{sticker}', ['uses' => 'StickersController@show']);
    Route::post('/', ['uses' => 'StickersController@store']);
    Route::put('{sticker}', ['uses' => 'StickersController@update']);
    Route::delete('{sticker}', ['uses' => 'StickersController@destroy']);
});

/**
 * Packs
 */
Route::prefix('packs')->group(function () {
    Route::get('/', ['uses' => 'PacksController@index']);
    Route::get('{pack}', ['uses' => 'PacksController@show']);
    Route::post('/', ['uses' => 'PacksController@store']);
    Route::put('{pack}', ['uses' => 'PacksController@update']);
    Route::delete('{pack}', ['uses' => 'PacksController@destroy']);
});

/**
 * Categories
 */
Route::prefix('categories')->group(function () {
    Route::get('/', ['uses' => 'CategoriesController@index']);
    Route::get('{pack}', ['uses' => 'CategoriesController@show']);
    Route::post('/', ['uses' => 'CategoriesController@store']);
    Route::put('{pack}', ['uses' => 'CategoriesController@update']);
    Route::delete('{pack}', ['uses' => 'CategoriesController@destroy']);
});

/**
 * Tags
 */
Route::prefix('tags')->group(function () {
    Route::get('/', ['uses' => 'TagsController@index']);
    Route::get('{pack}', ['uses' => 'TagsController@show']);
    Route::post('/', ['uses' => 'TagsController@store']);
    Route::put('{pack}', ['uses' => 'TagsController@update']);
    Route::delete('{pack}', ['uses' => 'TagsController@destroy']);
});

/**
 * Search
 */
Route::prefix('search')->group(function () {
    Route::get('/', ['uses' => 'SearchController@search']);
    Route::get('/tags', ['uses' => 'SearchController@searchByTags']);
    Route::get('/category', ['uses' => 'SearchController@searchByCategory']);
});