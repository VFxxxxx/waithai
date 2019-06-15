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
Route::group(['prefix' => App\Http\Middleware\LocaleMiddleware::getLocale()], function(){

    Route::get('setlocale/{lang}', 'LocaleController@setLocale')->name('setlocale');

    // Authentication Routes...
    Route::get('/', 'Auth\LoginController@showLoginForm')->name('login');
    Route::get('login', 'Auth\LoginController@showLoginForm')->name('login');
    Route::post('login', 'Auth\LoginController@login');
    Route::match(['get', 'post' ], 'logout', 'Auth\LoginController@logout')->name('logout');



    Route::group(['prefix' => 'admin'], function(){
        Route::group(['middleware' => ['auth']], function () {
            Route::resource('/massage_categories', 'MassageCategoryController');
            Route::resource('/massages', 'MassageController');



            Route::resource('/articles', 'ArticleController');


        });
    });











    Route::get('/', function () {
        return view('welcome');
    });

    Route::get('/home', 'HomeController@index')->name('home');


});
