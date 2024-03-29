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

Route::get('/', function () {
    return view('index');
});
Route::get('delete', function () {
    return view('delete');
});
Route::get('/User', function () {
    return view('User');
});
Route::get('/login', function () {
    return view('login');
});
Route::get('/register', function () {
    return view('register');
});
Route::get('/connect', function () {
    return view('connect');
});
Route::get('/update', function () {
    return view('update');
});
Route::get('/add', function () {
    return view('add');
});
Route::get('/useradd', function () {
    return view('useradd');
});

