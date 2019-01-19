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

Route::get('/users', 'UserController@index');
Route::get('/users/{user}', 'UserController@show');
Route::post('/users/{user}', 'UserController@store');
Route::put('/users/{user}', 'UserController@update');
Route::delete('/users/{user}', 'UserController@destroy');

Route::get('/questions', 'QuestionController@create');
Route::get('/questions/{question}', 'QuestionController@show');
Route::post('/questions', 'QuestionController@store');
Route::put('/questions/{question}', 'QuestionController@update');
Route::delete('/questions/{question}', 'QuestionController@destroy');

Route::get('/answers', 'AnswerController@index');
Route::get('/answers/{answer}', 'AnswerController@show');
Route::post('/answers/{answer}', 'AnswerController@store');
Route::put('/answers/{answer}', 'AnswerController@update');
Route::delete('/answers/{answer}', 'AnswerController@destroy');