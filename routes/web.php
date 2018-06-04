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

Route::get('/services', function () {
    return view('service');
});

Route::get('/for-parents', function () {
    return view('for-parents');
});

Route::get('/for-surrogates', function () {
    return view('for-surrogates');
});

Route::get('/for-donors', function () {
    return view('for-donors');
});

Route::get('/services/1', function () {
    return view('services.1');
});
