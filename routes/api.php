<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::get('/questions', 'QuestionController@index');
Route::get('/questions/{question}', 'QuestionController@show');

Route::get('/answers', 'AnswerController@index');
Route::get('/answers/{answer}', 'AnswerController@show');
