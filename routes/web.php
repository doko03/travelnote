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
Route::get('/travelnote/top', function() {
    return view('top/index');
});
Route::get('/travelnote/diary', function() {
    return view('diary/index');
});
Route::get('/travelnote/post', function() {
    return view('post/index');
});
Route::get('/dates', 'DateController@index');
Route::get('/destinations', 'DestinationController@index');
Route::get('/diaries', 'DiaryController@index');
Route::get('/plans', 'PlanController@index');
Route::get('/prefectures', 'PrefectureController@index');
