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
Route::get('/', 'DiaryController@index');
Route::get('/diaries/create', 'DiaryController@create');
Route::post('/diaries', 'DiaryController@store');
Route::get('/diaries/{diary}', 'DiaryController@show');
/*Route::get('/', function() {
    return view('diary/index');
});
Route::get('/diaries/show', function() {
    return view('diary/show');
});
Route::get('/diaries/create', function() {
    return view('diary/create');
});

Route::post('/post', 'DiaryController@store');

/*Route::get('/dates', 'DateController@index');
Route::get('/destinations', 'DestinationController@index');
Route::get('/diaries', 'DiaryController@index');
Route::get('/plans', 'PlanController@index');
Route::get('/prefectures', 'PrefectureController@index');
