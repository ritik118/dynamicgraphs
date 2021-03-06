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
Route::get('/home', 'HomeController@index')->name('home');
Route::get('/', function () {
    return view('welcome');
});
Route::get('/form', function () {
    return view('form');
});
Route::get('/print','QuestionController@index');
Route::get('/jj', 'QuestionController@search');

Route::get('/printradio','QuestioningController@index');
Route::get('/radio','QuestioningController@search');
Route::get('/comment','QuestioningController@store');
Route::get('/getid','QuestioningController@getId');
Route::get('/radiocom','QuestioningController@searchcomment');


Route::get('/json','OptionController@store');
Route::get('/optiontable', 'OptionController@search');


Route::get('/answer', 'AnswerController@store');

Route::get('/postcomment','commentController@store');
Auth::routes();


