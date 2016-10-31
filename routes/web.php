<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::group(['middleware' => 'auth'], function () {
    Route::get('/home', 'HomeController@index');
    Route::get('/password/reset', function() {
    	return redirect('/home');
    });



    Route::get('/vehicle/add', function(){
    	return view('vehicle.add');
    });
    Route::get('/vehicle/display_vehicle/{id}', 'VehicleCtr@display_vehicle');
    Route::post('/vehicle/add_new', 'VehicleCtr@add_new');
    Route::get('/vehicle/edit_vehicle/{id}', 'VehicleCtr@edit_vehicle');
    Route::post('/vehicle/edit/{id}', 'VehicleCtr@edit');
    Route::get('/vehicle/delete_vehicle/{id}', 'VehicleCtr@delete_vehicle');
});
