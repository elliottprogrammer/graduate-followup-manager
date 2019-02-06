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

Auth::routes();
Route::get('/', 'GraduatesController@index')->name('dashboard');
Route::resource('graduates', 'GraduatesController',	[
	'except' => ['destroy']
]);
Route::resource('notes', 'NotesController',	[
	'only' => ['store']
]);
Route::get('calendar-view', 'CalendarController@index');
