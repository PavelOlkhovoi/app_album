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

Route::get('projects', 'ProjectController@index')->name('project.index');
Route::get('projects/create', 'ProjectController@create')->name('project.add');
Route::post('projects/store', 'ProjectController@store')->name('project.store');
Route::get('projects/{id}/edit', 'ProjectController@edit')->name('project.edit');
Route::post('projects/{id}/update', 'ProjectController@update')->name('project.update');
Route::get('projects/{id}/show', 'ProjectController@show')->name('project.show');
Route::post('projects/{id}/destroy', 'ProjectController@destroy')->name('project.destroy');


Route::get('file', 'FileController@index')->name('file.index');
Route::get('file/create', 'FileController@create')->name('file.create');
Route::post('file/upload', 'FileController@store')->name('file.store');

Route::delete('file/{id}', 'FileController@destroy')->name('file.delete');
