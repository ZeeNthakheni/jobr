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

Auth::routes();

//Home routes
Route::get('/', 'HomeController@index')->name('home');
Route::get('/home', 'HomeController@index')->name('home');

//Jobs routes
Route::get('/create-jobs', function () {
    return view('pages.jobs.create');
});

Route::get('/jobs-internship', function () {
    return view('pages.jobs.internship');
});

Route::get('/jobs-leanership', function () {
    return view('pages.jobs.learnership');
});

Route::get('/jobs-pending', function () {
    return view('pages.jobs.pending');
});

Route::get('/jobs-professional', function () {
    return view('pages.jobs.professional');
});


//Client routes
Route::get('/create-clients', function () {
    return view('pages.clients.create');
});

Route::get('/clients-internship', function () {
    return view('pages.clients.internship');
});

Route::get('/clients-leanership', function () {
    return view('pages.clients.learnership');
});

Route::get('/clients-pending', function () {
    return view('pages.clients.pending');
});

Route::get('/clients-professional', function () {
    return view('pages.clients.professional');
});


//Candidates routes
Route::get('/candidates', function () {
    return view('pages.candidates.candidates');
});


//Attatchments routes
Route::get('/attatchments', function () {
    return view('pages.attatchments.attatchments');
});