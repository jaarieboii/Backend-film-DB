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
//Route::group(['middleware' => 'App\Http\Middleware\admin'], function()
//{
Route::get('/admin', 'AdminsController@index');
Route::post('/admin/post', 'AdminsController@update');

//Route::post('/films', 'FilmController@update');
//Route::get('/films/create', 'FilmController@create' );



Route::resources([
    
    'zalen'=> 'ZaalController',
    'genres'=> 'GenreController',
    //'reserveringen' => 'ReserveringController',
    'films' => 'FilmController',


]);
//});



Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
