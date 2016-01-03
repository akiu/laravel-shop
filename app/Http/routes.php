<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/',['as' => 'home', 'uses' => function () {
    return view('home.index'); 
}]);

Route::get('home', function () {
    return redirect()->route('home');
});

// Authentication routes...
Route::group(['prefix' => 'auth', 'as' => 'auth::'], function() {

	Route::get('login', ['as' => 'login', 'uses' => 'Auth\AuthController@getLogin']);
	Route::post('login', ['as' => 'postLogin', 'uses' => 'Auth\AuthController@postLogin']);
	Route::get('logout', ['as' => 'logout', 'uses' => 'Auth\AuthController@getLogout']);

	// Registration routes...
	Route::get('register', ['as' => 'register', 'uses' => 'Auth\AuthController@getRegister']);
	Route::post('register', ['as' => 'postRegister', 'uses' => 'Auth\AuthController@postRegister']);

});

Route::group(['prefix' => 'admin', 'as' => 'admin::', 'middleware' => 'admin'], function() {

	Route::get('/', ['as' => 'index', 'uses' => 'AdminController@index']);
	Route::get('login', ['as' => 'user', 'uses' => 'UserController@index']);

});

Route::get('/profile', ['as' => 'profile::index', 'uses' => 'ProfileController@index']);
Route::post('/profile/store', ['as' => 'profile::store', 'uses' => 'ProfileController@store']);

