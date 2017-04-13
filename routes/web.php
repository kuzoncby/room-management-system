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
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index');

Route::group(['prefix' => '/json'], function () {
    Route::get('/users', 'ApiRoomController@get_all_users');
    Route::get('/rooms', 'ApiRoomController@get_all_rooms');
    Route::get('/room/{room_number}', 'ApiRoomController@get_one_room');
});
Route::group(['prefix' => '/student'], function () {
    Route::get('/create', 'StudentController@create');
    Route::get('/{id}', 'StudentController@get');
    Route::post('/delete', 'StudentController@delete');
});

Route::group(['prefix' => '/filter'], function () {
    Route::post('/name', 'FilterController@name');
    Route::post('/room', 'FilterController@room');
});
