<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller //controller tu parents UserController tu anak
{
    public function index() {
    		return 'Hello World';
    }

    public function login() {
    	return view('frontend.login');
    }
}
