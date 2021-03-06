<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();
Route::prefix('backend')->group(function () {
    Route::get('/home', 'backend\HomeController@index')->name('home');
    Route::get('/edit-profile', 'backend\HomeController@editprofile')->name('editprofile');
    Route::post('/edit-profile/{id}', 'backend\HomeController@aksieditprofile');

    Route::resource('/roles','backend\rolesController');
    Route::get('/data-roles','backend\rolesController@listdata');
    
    Route::get('/data-admin','backend\AdminController@listdata');
    Route::resource('/admin','backend\AdminController');
    Route::get('/web-setting', 'backend\HomeController@websetting');
    Route::post('/web-setting', 'backend\HomeController@updatewebsetting');
});
