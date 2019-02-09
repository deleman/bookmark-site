<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LoginController extends Controller
{
    //return login in view
    public function login(){
        return view('store.login');
    }
    //return register in view
    public function register(){
        return view('store.register');
    }
}
