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

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:api');

Route::group(['middleware' => 'auth:api'], function () {
	Route::get('api/display_all_vehicles', 'VehicleAPICtr@display_all_vehicles');
    Route::get('api/display_vehicle/{id}', 'VehicleAPICtr@display_vehicle');
    Route::post('api/add_new', 'VehicleAPICtr@add_new');
    Route::post('api/edit_vehicle/{id}', 'VehicleAPICtr@edit_vehicle');
    Route::get('api/delete_vehicle/{id}', 'VehicleAPICtr@delete_vehicle');
});
