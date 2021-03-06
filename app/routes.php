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
	return View::make('dashboard');
});


Route::resource('projects', 'ProjectsController');
Route::get('projects/compactlist', 'ProjectsController@compactlist');
Route::get('projects/stageslist', 'ProjectsController@stageslist');

Route::resource('projectmeta', 'ProjectmetaController');

Route::resource('processes', 'ProcessesController');

Route::resource('stages', 'StagesController');

Route::resource('statusupdates', 'StatusupdatesController');