<?php

// Home
Route::get('/', array(
    'as'   => 'home',
    'uses' => 'HomeController@index')
);

// Blog
Route::group(['prefix' => 'blog'], function() {
    Route::get('/listing', array(
        'as'   => 'blog.listing',
        'uses' => 'BlogController@listing')
    );
    Route::get('/view/{slug}', array(
        'as'   => 'blog.view',
        'uses' => 'BlogController@view')
    );
});



// Authenication
Route::group(['prefix' => 'auth'], function() {
    Route::get('/login', array(
        'as'   => 'auth.login',
        'uses' => 'Auth\AuthController@getLogin')
    );
    Route::post('/login', array(
        'as'   => 'auth.login',
        'uses' => 'Auth\AuthController@postLogin')
    );
    Route::get('/logout', array(
        'as'   => 'auth.logout',
        'uses' => 'Auth\AuthController@getLogout')
    );
});