<?php
use Illuminate\Http\Request;


Route::get('/', 'IndexController@index')->name('index');

Route::get('/about', 'IndexController@about')->name('about');

Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');
