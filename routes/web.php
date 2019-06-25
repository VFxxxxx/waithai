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
// Authentication Routes...
Route::get('/admin', 'Auth\LoginController@showLoginForm')->name('login');
Route::get('login', 'Auth\LoginController@showLoginForm')->name('login');
Route::post('login', 'Auth\LoginController@login');
Route::match(['get', 'post' ], 'logout', 'Auth\LoginController@logout')->name('logout');
Route::get('setlocale/{lang}', 'LocaleController@setLocale')->name('setlocale');

Route::group(['prefix' => App\Http\Middleware\LocaleMiddleware::getLocale()], function(){
    Route::get('/home', 'HomeController@index')->name('home');
    Route::get('/', 'PageController@index')->name('index');
    Route::get('/gift-cards', 'PageController@gift')->name('gift');
    Route::get('/contact', 'PageController@contact')->name('contact');
    Route::get('/salons', 'PageController@salons')->name('salons');
    Route::get('/our-partners', 'PageController@partners')->name('partners');
    Route::get('/faq', 'PageController@faq')->name('faq');
    Route::get('/about-us', 'PageController@about')->name('about-us');
    Route::get('/articles', 'PageController@articles')->name('articles');
    Route::get('/news', 'PageController@news')->name('news');
    Route::get('/latest-news', 'PageController@latestNews')->name('latest-news');
    Route::get('/article/{slug}', 'PageController@articleDetail')->name('articleDetail');
    Route::get('/reviews', 'PageController@reviews')->name('reviews');
    Route::get('/franchise', 'PageController@franchise')->name('franchise');
    Route::get('/videos', 'PageController@videos')->name('videos');
    Route::get('/masters', 'PageController@masters')->name('masters');


    Route::group(['prefix' => 'admin'], function(){
        Route::group(['middleware' => ['auth']], function () {
            Route::resource('/massage_categories', 'MassageCategoryController');
            Route::resource('/massages', 'MassageController');
            Route::resource('/gifts', 'GiftController');
            Route::resource('/videos', 'VideoController');
            Route::resource('/news', 'NewsController');
            Route::resource('/articles', 'ArticleController');
            Route::resource('/reviews', 'ReviewController');
            Route::resource('/masters', 'MasterController');
            Route::resource('/partners', 'PartnerController');

            Route::get('/page_data/about', 'PageDataController@about')->name('page_data.about');
            Route::patch('/page_data/about', 'PageDataController@aboutUpdate')->name('page_data.aboutUpdate');
            Route::get('/page_data/news', 'PageDataController@news')->name('page_data.news');
            Route::patch('/page_data/news', 'PageDataController@newsUpdate')->name('page_data.newsUpdate');

        });
    });



});
