<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class UserController extends Controller //controller tu parents UserController tu anak
{
    public function index() {
    		return 'Hello World';
    }

    public function login() {
    		return view('frontend.login');
    }
    public function register() {
    		return view('frontend.register');
    }

    public function registerPost(Request $request){
    	$request->validate([
    		'name' =>'required',
    		'email' =>'required|email|unique:users',
    		'ic' =>'required|unique:users',
    		'password'=>'required'
    	], ['name.required'=>'Sila masukkan nama',
    		'email.email'=>'Email tidak sahkan',
    		'email.unique'=>'Email sudah wujud'
    	]);

    	$user = new User (); //$user nama variable User Nama class
    	$user->name =$request->name; //cara nak assign variable: dia request form data nama name
    	$user->email=$request->email;//asign input field kt database
    	$user->ic=$request->ic;
    	$user->password=bcrypt($request->password);
    	$user->save();

    	return back()->with('success','Data anda dah masuk'); // with tu mcm session dia pegang sbb nak back balik
    }
}
