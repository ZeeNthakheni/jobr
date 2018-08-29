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

//Route::get('/', function () {
//    return view('welcome');
//});


//Authentication routes
Auth::routes();

//Home routes
Route::get('/', 'HomeController@index')->name('home');

Route::get('/home', 'HomeController@index')->name('home');

//Jobs routes
Route::get('/jobs-all','jobsController@index');

Route::get('/jobs-create','jobsController@create');

Route::get('/jobs-internship','jobsController@internship');

Route::get('/jobs-leanership','jobsController@learnership');

Route::get('/jobs-pending','jobsController@pending');

Route::get('/jobs-professional','jobsController@professional');

Route::resource('jobs', 'jobsController');

//Client routes
Route::get('/clients-all','clientsController@index');

Route::get('/clients-create','clientsController@create');

Route::get('/clients-internship','clientsController@internship');

Route::get('/clients-leanership','clientsController@learnership');

Route::get('/clients-pending','clientsController@pending');

Route::get('/clients-professional','clientsController@professional');

Route::resource('clients', 'clientsController');

//Candidates routes
Route::get('/candidates/placed','candidatesController@placed');

Route::get('/candidates/listed','candidatesController@listed');

Route::get('/candidates-pending','candidatesController@pending');

Route::get('/candidates/shortlisted','candidatesController@shortlisted');

Route::get('/candidates/blacklisted','candidatesController@blacklisted');

Route::resource('candidates', 'candidatesController');


//Attatchments routes

Route::resource('attatchments', 'attatchmentsController');

//Messages routes

//Route::resource('messages', 'messagesController');