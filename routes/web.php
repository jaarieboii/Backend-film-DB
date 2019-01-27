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


Route::get('/', 'FilmController@index' );
Route::group(['middleware' => ['auth', 'admin']], function()
{
Route::get('/admin', 'AdminsController@index');

Route::post('/admin/isnotadmin/{id}', 'AdminsController@isNotAdmin');
Route::post('/admin/isadmin/{id}', 'AdminsController@makeAdmin');
//Route::post('/films', 'FilmController@update');
//Route::get('/films/create', 'FilmController@create' );



Route::resources([
    
    'zalen'=> 'ZaalController',
    'genres'=> 'GenreController',
    //'reserveringen' => 'ReserveringController',
    'films' => 'FilmController',


]);
});



Auth::routes();
Route::post('favorite/{film}', 'FilmController@favoriteFilm');
Route::post('unfavorite/{film}', 'FilmController@unFavoriteFilm');

Route::get('my_favorites', 'HomeController@myFavorites')->middleware('auth');
Route::get('/home', 'HomeController@index')->name('home');
