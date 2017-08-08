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
	return realpath(storage_path('framework/views'));
    return view('welcome');
});

//this gets and 'uses' the newly made UsersController at the index.
Route::get('users', ['uses' => 'UsersController@index']);

//below does the same as the above function, just longer.
/*
Route::get('users', function () {
	$users = [
		'0'=> [
					'first_name' => 'John',
					'last_name' => 'Green',
					'city' => 'Nashville'
					],
		'1'=> [
					'first_name' => 'Kala',
					'last_name' => 'Cannon',
					'city' => 'Smyrna'
					]
	];
	return $users;
});
