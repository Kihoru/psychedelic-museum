<?php

/*
|--------------------------------------------------------------------------
| Routes File
|--------------------------------------------------------------------------
|
| Here is where you will register all of the routes in an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    return view('front.index');
});

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| This route group applies the "web" middleware group to every route
| it contains. The "web" middleware group is defined in your HTTP
| kernel and includes session state, CSRF protection, and more.
|
*/

Route::group(['middleware' => ['web']], function () {

    Route::post('login', 'LoginController@login');
    Route::get('admin', 'LoginController@login');
    Route::get('logout', 'LoginController@logout');

    Route::group(['middleware' => ['auth']], function(){
        Route::get('eventlist', 'DashboardController@showEventList');
        Route::get('settings', 'DashboardController@showSettings');
        Route::get('users', 'DashboardController@showUsers');
        Route::get('dashboard', 'DashboardController@showDashboard');
        Route::post('dashboard', 'DashboardController@create_event');
        Route::get('edit/{id}', 'DashboardController@showEdit');
        Route::get('delete/{id}', 'DashboardController@destroy');
        Route::post('edit/{id}', 'DashboardController@update');
        Route::get('deleteUser/{id}', 'DashboardController@deleteUser');
        Route::post('createUser', 'DashboardController@createUser');
    });
});
