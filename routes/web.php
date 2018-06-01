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
    return view('index');
});

Route::get('/about', function () {
    return view('about');
});

Route::get('/contacts', function () {
    return view('contacts');
});

Route::get('/service', function () {
    return view('service');
});

Route::get('/text', function () {
    return view('text');
});

Route::get('/text1', function () {
    return view('text1');
});

Route::get('/text2', function () {
    return view('text2');
});

Route::get('/text3', function () {
    return view('text3');
});
