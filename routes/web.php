<?php

use App\Mail\ContactMessageCreated;

Route::name('home')->get('/', 'pagesController@home');

Route::get('/test-email', function () {
    return new ContactMessageCreated('Herman', 'kutat2000@gmail.com', 'Bafoussam');

});

Route::name('about')->get('about', 'pagesController@about');
Route::name('artisan')->get('artisan', 'pagesController@artisan');
Route::name('contact')->get('contact', 'contactsController@create');
Route::name('contact')->post('contact', 'contactsController@store');

