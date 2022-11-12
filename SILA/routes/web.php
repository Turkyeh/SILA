<?php

use Illuminate\Support\Facades\Route;

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
// ctrl+Y

Route::get('/', function () {
    return view('landing');
});




Route::get('/login', function () {
    return view('login');
});

Route::get('/index', function () {
    return view('.index');
});

Route::get('/about', function () {
    return view('about');
});

Route::get('/Gallary', function () {
    return view('Gallary');
});

Route::get('/Post', function () {
    return view('Post');
});

Route::get('/countact', function () {
    return view('countact');
});


Route::get('/Advice', function () {
    return view('Advice');
});
