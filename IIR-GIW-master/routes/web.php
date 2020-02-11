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

// use phpDocumentor\Reflection\File;

Route::get('/', function () {
    //return view('welcome');
    // dd(public_path());
    return File::get(public_path() . '/giw2020/index.html');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
