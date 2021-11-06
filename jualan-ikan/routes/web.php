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

use App\Http\Controllers\CommodityController;

Route::get('/', function () {
    return view('pages.home');
});

Route::get('/items', 'ItemController@index');

Route::prefix('admin')->group(function () {
    Route::group(['middleware' => 'auth'], function () {
        Route::resource('/item', 'admin\ItemController');
        Route::resource('/carousel', 'admin\CarouselController');
        Route::resource('/commodity', 'admin\CommodityController');
        Route::resource('/setting', 'admin\SettingController');
        Route::resource('/social-media', 'admin\SocialMediaController');
        Route::get('/dashboard', 'admin\DashboardController@index');
    });
});

Auth::routes(['register' => false]);

Route::get('/home', 'HomeController@index')->name('home');
