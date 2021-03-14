<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
*/


Auth::routes(['verify' => false, 'register' => true]);

Route::middleware(['auth'])->group(function () {
    Route::get('home', 'HomeController@index');
    Route::resource('about', 'AboutAdminController');
    Route::resource('serie', 'SerieController');
    Route::resource('video', 'VedioController');
    Route::resource('user', 'UserAdminController');
    Route::resource('UserSetting', 'UserSettingAdminController');
    Route::resource('slider', 'SliderController');
    Route::resource('categories', 'CategoriesAdminController');
    Route::resource('sousCategories', 'SousCategoriesAdminController');
    Route::resource('email', 'EmailAdminController');
});

Route::group(
    [
        'namespace' => 'WebSite',
        'prefix' => LaravelLocalization::setLocale(),
        'middleware' => ['localeSessionRedirect', 'localizationRedirect', 'localeViewPath']
    ], function () {
    Route::get('/', 'IndexController@index')->name('index');
    Route::post('/', 'IndexController@store')->name('index.store');
    Route::get('category/{id}', 'CategoryController@show')->name('category.show');

    Route::get('vedioshow/{id}', 'VedioshowController@show_vedio')->name('vedio.show');
});
