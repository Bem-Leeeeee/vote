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

Route::get('/', 'AuthController@index');
Route::post('/check', 'AuthController@check');
Route::get('/vote', 'VoteController@vote');
Route::get('/vote/{type}', 'VoteController@voting');
Route::post('vote/{type}/{name}', 'VotingController@voting');
Route::get('/result/{type}', 'AuthController@result');

Route::prefix('admin')->group(function () {
    Route::get('login', 'AuthController@showlogin');
    Route::post('login', 'AuthController@login');
    Route::get('adduser', 'AdminController@adduserpage');
    Route::post('adduser', 'AdminController@adduser');
    Route::get('users', 'AdminController@users');
    Route::get('addelector', 'AdminController@addelectorpage');
    Route::post('addelector', 'AdminController@addelector');
    Route::get('electors', 'AdminController@electors');
    Route::get('test', 'AdminController@test');
    Route::get('vote/result/{type}', 'AdminController@result');
    Route::post('vote/deluser/{id}', 'AdminController@deluser');
    Route::post('vote/delelector/{id}', 'AdminController@delelector');
    Route::get('vote/editUser/{id}', 'AdminController@edituserpage');
    Route::post('vote/editUser/{id}', 'AdminController@edituser');
    Route::get('vote/editElector/{id}', 'AdminController@editelectorpage');
    Route::post('vote/editElector/{id}', 'AdminController@editelector');
    Route::post('vote/switch', 'AdminController@switch');
    Route::get('vote/export/{type}', 'ExportController@export');
    Route::get('/switch', 'AdminController@switchpage');
    Route::post('/vote/delAllRec', 'AdminController@delAllRec');
    Route::post('/vote/delCurUserRec/{id}', 'AdminController@delCurUserRec');
    Route::post('/vote/delCurElectorRec/{id}', 'AdminController@delCurElectorRec');
    Route::post('/vote/delCurUserTypeRec/{id}/{type}', 'AdminController@delCurUserTypeRec');
});
