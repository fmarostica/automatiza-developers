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
Route::get('/panel/novedades', 'ArticleController@panel')->name('panel-news')->middleware("auth");
Route::get('/panel/novedades/agregar', 'ArticleController@create')->name('panel-news-add')->middleware("auth");

Route::get('/downloads', 'DownloadsController@index')->name('downloads');
Route::get('/panel', function(){
    return view("panel.index");
})->name('panel')->middleware('auth');

Route::get('/panel/documentacion', function(){
    return view("panel.documents");
})->middleware('auth');

Route::get('/panel/descargas', function(){
    return view("panel.downloads");
})->middleware('auth');

Auth::routes();

