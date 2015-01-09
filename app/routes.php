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

Route::get('/', function()
{
	return View::make('hello');
});

Route::get( 'admin/original', 'AdminController@original');

Route::get( '/admin', 'AdminController@index');

Route::get( '/admin/dashboard', 'AdminController@dashboard');

Route::get( '/admin/tabs', 'TabsController@index');
Route::post( '/admin/tabs', 'TabsController@create');
Route::post( '/admin/tabs/remove/{id}', 'TabsController@remove');

Route::get('admin/questions','QuestionsController@index');
Route::get('admin/questions/create','QuestionsController@create');
Route::post('admin/questions/create','QuestionsController@do_create');

