<?php

Route::get('/', 'PagesController@home');
Route::get('/about', 'PagesController@about');
Route::get('/work', 'PagesController@work');
Route::get('/contact', 'PagesController@contact');
Route::post('/contact', 'MailController@sendMail');