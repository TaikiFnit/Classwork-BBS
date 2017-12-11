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
  return redirect('/schools');
});

Route::resource('/schools', 'SchoolController');
Route::resource('/schools.lectures', 'LectureController');
Route::resource('/schools.lectures.bbs', 'BbsController');
Route::resource('/schools.lectures.bbs.comments', 'CommentController');
Route::resource('/schools.lectures.groups', 'GroupController');

Route::get('/api/v1/schools', 'SchoolController@indexApi');
Route::get('/api/v1/schools/{school}/lectures', 'LectureController@indexApi');
Route::get('/api/v1/schools/{school}/lectures/{lecture}/bbs', 'BbsController@indexApi');
Route::get('/api/v1/schools/{school}/lectures/{lecture}/bbs/{bbs}/comments', 'CommentController@indexApi');




