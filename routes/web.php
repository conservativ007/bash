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

// ShowController
Route::get('/bezdna', 'ShowController@bezdna')
->name('bezdna');
Route::get('/new', 'ShowController@new')
->name('new');


// SortController
Route::get('/new/sorttop/{item?}/{sort?}', 'SortController@sortTop')
->name('sorttop');
Route::get('/new/sorttopforever/{item?}/{sort?}', 'SortController@sortTopForever')
->name('sorttopforever');

// AddStoryController
Route::get('/bezdna/add', function(){
  return view('story.elems.add');
})->name('bezdnaadd');
Route::get('/bezdna/addbezdna', 'AddStoryController@add')->name('addbezdna');

// LikeController
Route::get('/bezdna/like{id}/{num}/{item}', 'LikeController@like')
->name('like');
Route::get('/accordion/{id}/{item}', 'LikeController@accordion')
->name('accordion');

Route::group([
  'middleware' => 'auth'
], function(){
    Route::get('bezdna/redact/{id}/{item}', 'AddStoryController@redact')
    ->name('redact');
    Route::get('bezdna/addstory', 'AddStoryController@addstory')
    ->name('addstory');
});
