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

Route::get('/', 'HomeController@index')->name('home');
Route::resource('/docs', 'DocumentController');
Route::get('/news', 'ArticleController@index')->name('news');
Route::get('/downloads', 'DownloadsController@index')->name('downloads');
Route::get('/panel', function(){
    return view("panel.index");
})->name('panel')->middleware('auth');

Auth::routes();

