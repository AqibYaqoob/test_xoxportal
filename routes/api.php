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

/**
 *
 * 1) Get Selected Plans Images on Data Roaming Page
 *
 */
Route::post('dataroaming/image', 'WebControllers\DataRoamingController@getPlanImage');

/**
 *
 * 2) Delete Image from Admin Portal
 *
 */
Route::post('del/image', 'WebControllers\VoyagerImageDeleteController@delete')->name('del-image');

/**
 *
 * 3) Get Code from Country
 *
 */
Route::post('country/detail', 'WebControllers\CountryController@index');

/**
 *
 * 4) Get Deals Category details for dropdown
 *
 */
Route::post('get/deals/category/detail', 'WebControllers\DealsCategoryController@index');