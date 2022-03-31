<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Mycontroller extends Controller
{
    public function welcome() {
        return view('welcome');
    }
    public function login() {
        return view('auth-login-basic');
    }
    public function register() {
        return view('auth-register-basic');
    }
    public function forgotpassword(){
        return view('auth-forgot-password-basic');
    }
    public function cards(){
        return view('cards-basic');
    }
    public function dashboard(){
        return view('dashboard');
    }
    public function account() {
        return view('pages-account-settings-account');
    }
    public function connections() {
        return view('pages-account-settings-connections');
    }
    public function notifications() {
        return view('pages-account-settings-notifications');
    }
    public function error() {
        return view('pages-misc-error');
    }
    public function maintenance() {
        return view('pages-misc-maintenance');
    }
    public function tables() {
        return view('tables-basic');
    }
}
