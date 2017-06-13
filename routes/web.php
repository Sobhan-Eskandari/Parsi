<?php

//Auth::routes();

Route::get('/login', 'Auth\LoginController@showLoginForm')->name('login');
Route::post('/login', 'Auth\LoginController@login');
Route::post('/logout', 'Auth\LoginController@logout')->name('logout');

Route::get('/', 'HomeController@index')->name('home');

Route::group(['middleware' => 'auth'], function (){

    Route::resource('/posts', 'PostController');

    Route::resource('/lecturers', 'LecturerController');

    Route::resource('/crews', 'CrewController');

    Route::resource('/messages', 'MessageController');
    Route::post('/messages/answer', 'MessageController@answer')->name('message.answer');

    Route::resource('/admin', 'UserController');

    Route::resource('/settings', 'SettingController');

});

Route::post('/messages', 'MessageController@store')->name('messages.store');

Route::get('/blog', 'HomeController@allPosts')->name('posts.all');
Route::get('/blog/{post}', 'HomeController@showPost')->name('show_post');

Route::get('/about_us', 'HomeController@about_us')->name('about_us');

Route::get('/loginPage', function () {
    return view('pages.loginPage');
});
