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

// Administration
Route::group(['prefix' => 'administration'], function() {
    Route::get('/', array(
        'as'   => 'administration.index',
        'uses' => 'AdministrationController@index')
    );

    // Blog
    Route::group(['prefix' => 'blog', 'namespace' => 'Admin'], function() {

        Route::get('/add', array(
            'as'   => 'administration.blog.add',
            'uses' => 'BlogController@add')
        );
        Route::get('/edit/{id}', array(
            'as'   => 'administration.blog.edit',
            'uses' => 'BlogController@edit')
        );

        Route::post('/insert', array(
            'as'   => 'administration.blog.insert',
            'uses' => 'BlogController@insert')
        );
        Route::post('/update', array(
            'as'   => 'administration.blog.update',
            'uses' => 'BlogController@update')
        );

        Route::get('/delete/{id}', array(
            'as'   => 'administration.blog.delete',
            'uses' => 'BlogController@delete')
        );
        Route::get('/publish/{id}', array(
            'as'   => 'administration.blog.publish',
            'uses' => 'BlogController@publish')
        );
        Route::get('/unpublish/{id}', array(
            'as'   => 'administration.blog.unpublish',
            'uses' => 'BlogController@unpublish')
        );

        Route::post('/slug', array(
            'as'   => 'administration.blog.slug',
            'uses' => 'BlogController@slug')
        );
    });
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