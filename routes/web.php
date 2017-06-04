<?php

Auth::routes();

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

Route::get('/blog', 'HomeController@allPosts')->name('posts.all');
Route::get('/blog/{post}', 'HomeController@showPost')->name('show_post');

Route::get('/about_us', 'HomeController@about_us')->name('about_us');
