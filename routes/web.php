<?php

/**
 * Base Route
 */
Route::get('/', function () {
    return view('pages.home');
});

/**
 * Authentication Routes
 */
Route::get('/register', 'PagesController@ShowRegister');
Route::Post('/register');