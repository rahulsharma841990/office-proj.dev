<?php

namespace App\Http\Controllers;

class MyController extends Controller{


	function index(){
		//return view('welcome');
		return "Hello World!!";
	}

	function contact(){
		return view('pages.contact');
	}

	
}