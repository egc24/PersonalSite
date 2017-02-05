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

//Route::get('/', 'WelcomeController@index');

Route::get('/', function(){return view('welcome');});
Route::get('/resume', function(){return view('resume');});
Route::get('/contact', function(){return view('contact');});
Route::get('/blog', function(){return view('blog');});
Route::get('/bio', function(){return view('bio');});
Route::get('/blogArticle', function(){return view('blogArticle');});

