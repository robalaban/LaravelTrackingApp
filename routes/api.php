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

// Primary Route for ApiCalls, using Ajax middleware for extra security

Route::get('package/{package}', [
		'as'   => 'getPackage', 
		'uses' => 'Packages@getPackage'
])->middleware('ajax');
