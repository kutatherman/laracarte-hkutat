<?php

Route::name('home')->get('/', 'pagesController@home');
Route::name('about')->get('about', 'pagesController@about');
Route::name('artisan')->get('artisan', 'pagesController@artisan');
Route::name('contact')->get('contact', 'contactsController@create');
Route::name('contact')->post('contact', 'contactsController@store');

