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
Route::get('/jobs-all','JobsController@index');

Route::get('/jobs-create','JobsController@create');

Route::get('/jobs-internship','JobsController@internship');

Route::get('/jobs-leanership','JobsController@learnership');

Route::get('/jobs-pending','JobsController@pending');

Route::get('/jobs-professional','JobsController@professional');

Route::resource('jobs', 'JobsController');

//Client routes
Route::get('/clients-all','ClientsController@index');

Route::get('/clients-create','ClientsController@create');

Route::get('/clients-internship','ClientsController@internship');

Route::get('/clients-leanership','ClientsController@learnership');

Route::get('/clients-pending','ClientsController@pending');

Route::get('/clients-professional','ClientsController@professional');

Route::resource('clients', 'ClientsController');

//Candidates routes
Route::get('/candidates-create','CandidatesController@create');

Route::get('/candidates/placed','CandidatesController@placed');

Route::get('/candidates/listed','CandidatesController@listed');

Route::get('/candidates-pending','CandidatesController@pending');

Route::get('/candidates/shortlisted','CandidatesController@shortlisted');

Route::get('/candidates/blacklisted','CandidatesController@blacklisted');

Route::DELETE('/candidates/{candidate}/delete','CandidatesController@destroy');

Route::resource('candidates', 'CandidatesController');


//Attatchments routes

Route::resource('attatchments', 'AttatchmentsController');

Route::get('/attatchments-create','AttatchmentsController@create');

Route::get('/attatchments/{attatchment}/download','AttatchmentsController@download');

//Messages routes

//Route::resource('messages', 'messagesController');

//User routes

Route::get('/user-view','UsersController@view');

Route::PATCH('/user-update/{user}','UsersController@update');

//Companies Routes

Route::get('/companies-all','CompaniesController@index');

Route::get('/company-create','CompaniesController@create');

Route::get('/company-edit/{id}','CompaniesController@edit');

Route::resource('company', 'CompaniesController');