<?php

Route::resource('/', 'PagesController@home');
Route::resource('/about', 'PagesController@about');
Route::resource('/contact', 'PagesController@contact');