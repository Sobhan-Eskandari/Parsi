<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

use Illuminate\Http\Request;

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();
/*Route::get('/home', 'HomeController@index')->name('home');*/
Route::get('/map', function () {
    return view('testMap');
});

Route::post('/map', function (Request $request) {
    dd($request->all());
});
Route::get('/homePage', function () {
    return view('pages.homePage');
});
Route::get('/dashboard', function () {
    return view('layouts.dashboard');
});
Route::get('/makePost', function () {
    return view('pages.makePost');
});
Route::get('/answerMsg', function () {
    return view('pages.answerMsg');
});
Route::get('/adminProfile', function () {
    return view('pages.adminProfile');
});
Route::get('/posts', function () {
    return view('pages.posts');
});
Route::get('/pms', function () {
    return view('pages.pms');
});
Route::get('/setting', function () {
    return view('pages.setting');
});
Route::get('/speakers', function () {
    return view('pages.speakers');
});
Route::get('/staff', function () {
    return view('pages.staff');
});
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
Route::get('/test', function () {
    return view('pages.test');
});