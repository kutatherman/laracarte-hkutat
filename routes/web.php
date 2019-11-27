<?php

Route::name('home')->get('/', 'pagesController@home');
Route::name('about')->get('about', 'pagesController@about');
Route::name('contact')->get('contact', 'pagesController@contact');
Route::name('artisan')->get('artisan', 'pagesController@artisan');

