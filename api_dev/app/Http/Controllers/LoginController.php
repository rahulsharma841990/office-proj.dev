<?php

namespace App\Http\Controllers;

use Request;
use Auth;
use App\Http\Requests;
use App\Http\Controllers\Controller;


class LoginController extends Controller
{
    public function index()
    {
    	if(Auth::user()){
    		echo "Working";
    	}
    	return view('login');
    }

    public function LoginUser(){
    	$input = Request::all();
    	return $input;
    }
}
