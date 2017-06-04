<?php

Auth::routes();

Route::get('/blog', function () {
    return view('layouts.blog');
});

Route::get('/aboutUs', function () {
    return view('pages.aboutUs');
});

Route::get('/openPost', function () {
    return view('pages.openPost');
});

Route::get('/blogPng', function () {
    return view('pages.blogPng');
});


Route::get('/', 'HomeController@index')->name('home');

//Route::group(['middleware' => 'auth'], function (){

    Route::resource('/posts', 'PostController');

    Route::resource('/lecturers', 'LecturerController');

    Route::resource('/crews', 'CrewController');

    Route::resource('/messages', 'MessageController');
    Route::post('/messages/answer', 'MessageController@answer')->name('message.answer');

    Route::resource('/admin', 'UserController');

    Route::resource('/settings', 'SettingController');

//});

Route::post('/messages', 'MessageController@store')->name('messages.store');

Route::get('/test', function () {
    return view('pages.test');
});

