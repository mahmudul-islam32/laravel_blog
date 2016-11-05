<?php



Route::get('/', function () {
    return view('welcome');
});

Route::get('about','PagesController@about');

Route::resource('articles','ArticlesController');


Route::get('auth/login', 'Auth\AuthController@getLogin');
Route::post('auth/login', 'Auth\AuthController@postLogin');
Route::get('auth/logout', 'Auth\AuthController@getLogout');

// Registration routes...
Route::get('auth/register', 'Auth\AuthController@getRegister');
Route::post('auth/register', 'Auth\AuthController@postRegister');


Route::controllers([
    'password' => 'Auth\PasswordController',
]);





Route::auth();


Route::get('/home', 'HomeController@index');
