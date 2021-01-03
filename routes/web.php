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
        'middleware' => [ 'localeSessionRedirect', 'localizationRedirect', 'localeViewPath' ]
    ], function(){
     Route::get('/', 'IndexController@index');
     Route::resource('/category', 'CategoryController');
     Route::resource('/vedioshow', 'VedioshowController');
});
