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

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/personne/add', 'PersonneController@add')->name('addpersonne');

Route::get('/personne/edit/{id}', 'PersonneController@edit')->name('editpersonne');

Route::get('/personne/delete/{id}', 'PersonneController@delete')->name('deletepersonne');

Route::get('/personne/update', 'PersonneController@update')->name('updatepersonne');

Route::get('/personne/getAll', 'PersonneController@getAll')->name('getAllpersonne');
Route::post('/personne/persist', 'PersonneController@persist')->name('persistpersonne');
