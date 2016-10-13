<?php



Route::get('/', function () {
    return view('welcome');
});

Route::get('about','PagesController@about');

Route::resource('articles','ArticlesController');