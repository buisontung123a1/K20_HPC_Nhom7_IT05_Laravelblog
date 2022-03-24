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
    return view('welcome');
});
Route::get('/tables-basic', function () {
    return view('tables-basic');
});
Route::get('/index1', function () {
    return view('index1');
});
Route::get('/pages-misc-error', function () {
    return view('pages-misc-error');
}) ->name('admin.pages-misc-error');
