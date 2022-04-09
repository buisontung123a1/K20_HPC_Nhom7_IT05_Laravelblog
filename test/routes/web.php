<?php

use App\Http\Controllers\Mycontroller;
use Illuminate\Routing\Route as RoutingRoute;
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

Route::get('/', [Mycontroller::class, 'welcome']);
Route::get('/auth-login-basic', [Mycontroller::class, 'login']);
Route::get('/auth-register-basic', [Mycontroller::class, 'register']);
Route::get('/auth-forgot-password-basic', [Mycontroller::class, 'forgotpassword']);
Route::get('/cards-basic', [Mycontroller::class, 'cards']);
Route::get('/dashboard', [Mycontroller::class, 'dashboard']);
Route::get('/pages-account-settings-account', [Mycontroller::class, 'account']);
Route::get('/pages-account-settings-connections', [Mycontroller::class, 'connections']);
Route::get('/pages-account-settings-notifications', [Mycontroller::class, 'notifications']);
Route::get('/pages-misc-error', [Mycontroller::class, 'error']);
Route::get('/pages-misc-under-maintenance', [Mycontroller::class, 'maintenance']);
Route::get('/tables-basic', [Mycontroller::class, 'tables']);


// Route::get('/tables-basic', function () {
//     return view('tables-basic');
// });
// Route::get('/dashboard', function () {
//     return view('dashboard');
// });
// Route::get('/pages-misc-error', function () {
//     return view('pages-misc-error');
// }) -> name('admin.pages-misc-error');
// Route::get('/pages-misc-under-maintenance', function () {
//     return view('pages-misc-under-maintenance');
// });
// Route::get('/layouts-without-menu', function(){
//     return view('layouts-without-menu');
// });
// Route::get('/auth-login-basic', function(){
//     return view('auth-login-basic');
// });
// Route::get('/auth-register-basic', function(){
//     return view('auth-register-basic');
// });
// Route::get('/auth-forgot-password-basic', function(){
//     return view('auth-forgot-password-basic');
// });
// Route::get('/pages-account-settings-account', function(){
//     return view('pages-account-settings-account');
// });
// Route::get('/pages-account-settings-connections', function(){
//     return view('pages-account-settings-connections');
// });
// Route::get('/pages-account-settings-notifications', function(){
//     return view('pages-account-settings-notifications');
// });
// Route::get('/cards-basic', function(){
//     return view('cards-basic');
// });