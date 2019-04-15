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

// News 
Route::get('/news', 'ArticleController@index')->name('news');
Route::get('/news/list', 'ArticleController@list');
Route::get('/panel/news', function(){ return view('panel.news'); })->name('panel-news')->middleware("auth");
Route::get('/panel/news/create', 'ArticleController@create');
Route::delete('/panel/news/{id}', 'ArticleController@destroy');
Route::post('/panel/news/add', 'ArticleController@store')->name('panel-news-add')->middleware("auth");

//docs
Route::get('/docs', 'DocumentController@index')->name('docs');
Route::get('/docs/list', 'DocumentController@list')->name('docs-list');
Route::get('/panel/docs', function(){ return view('panel.documents'); })->middleware("auth");
Route::get('/panel/docs/create', 'DocumentController@create')->name('panel-docs-create')->middleware('auth');
Route::post('/panel/docs/add', 'DocumentController@add')->name('panel-docs-add')->middleware('auth');
Route::delete('panel/docs/{id}', 'DocumentController@destroy')->middleware('auth');

//downloads
Route::get('/downloads', 'DownloadsController@index')->name('downloads');
Route::get('/panel/downloads', function(){ return view('panel.downloads'); });
Route::get('/panel/downloads/create', 'DownloadsController@create')->middleware('auth');
Route::post('/panel/downloads/add', 'DownloadsController@store')->middleware('auth');
Route::delete('panel/downloads/{id}', 'DownloadsController@destroy')->middleware('auth');
Route::get('/downloads/list', 'DownloadsController@list');

//others
Route::get('/panel', function(){
    return view("panel.index");
})->name('panel')->middleware('auth');

Auth::routes();

