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

Route::get('/', 'WelcomeController@welcome');

Auth::routes();

Route::get('/home', 'HomeController@index');

Route::group(['prefix' => '/v1'], function () {
    Route::get('/users', 'ApiRoomController@get_all_users');
    Route::get('/user/{username}', 'ApiRoomController@get_one_user');
    Route::get('/rooms', 'ApiRoomController@get_all_rooms');
    Route::get('/room/{room_number}', 'ApiRoomController@get_one_room');
});

Route::get('/user/{username}', 'StudentController@get_one_user');
Route::get('/room/{room_number}', 'RoomController@get_one_room');
Route::get('/settings', 'SettingsController@settings');

Route::get('/test', function () {
    return view('test.home');
});

Route::group(['prefix' => '/filter'], function () {
    Route::post('/name', 'FilterController@name');
    Route::post('/room', 'FilterController@room');
});
