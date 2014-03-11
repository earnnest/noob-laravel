<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/

//Route::get('/', 'PagesController@home');



Route::get('users', function() {

	$users = User::all();

	

	return View::make('users/index')->with('users', $users);
	
	});

Route::get('users/{username}', function($username){

	$users = User::where('username', '=', $username)->first();

	return View::make('users/show')->with('user', $users);

	});