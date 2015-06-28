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

Route::get('/', 'HomeController@getIndex');

Route::controller('home', 'HomeController');
Route::controller('news', 'NewsController');

Route::controllers([
	'auth' => 'Auth\AuthController',
	'password' => 'Auth\PasswordController',
]);


Route::group(['middleware'=>'auth', 'prefix'=>'admin'], function() {

  Route::controller('news', 'Admin\NewsController');

  Route::controller('contact', 'Admin\ContactController');

  Route::controller('user', 'Admin\UserController');

  Route::controller('portfolio', 'Admin\PortfolioController');

  Route::controller('project', 'Admin\ProjectController');

  Route::controller('page', 'Admin\PageController');

});