<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Mycontroller extends Controller
{
    public function login() {
        return view('auth-login-basic');
    }
    public function register() {
        return view('auth-register-basic');
    }
    public function forgot_password(){
        return view('auth-forgot-password-basic');
    }
    public function card(){
        return view('cards-basic');
    }
    public function dashboard(){
        return view('dashboard');
    }
}
