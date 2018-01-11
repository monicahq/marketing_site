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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/features', function () {
    return view('features');
});

Route::get('/features/dashboard', function () {
    return view('features.dashboard');
});

Route::get('/features/reminders', function () {
    return view('features.reminders');
});

Route::get('/features/journal', function () {
    return view('features.journal');
});

Route::get('/team', function () {
    return view('team');
});

Route::get('/pricing', function () {
    return view('pricing');
});

Route::get('/privacy', function () {
    return view('privacy');
});

Route::get('/changelog', function () {
    return view('changelog');
});

Route::get('/terms', function () {
    return view('terms');
});

Route::get('/blog', 'BlogController@index');
Route::get('/blog/{slug}', 'BlogController@post');
Route::get('/blog/category/{slug}', 'BlogController@category');

Route::get('/api', 'ApiController@index');
Route::get('/api/{category}', 'ApiController@category');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
