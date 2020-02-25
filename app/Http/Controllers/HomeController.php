<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
   	public function index()
   	{
   		return view('home', [
   			'name' => 'Home Page'
   		]);

   		// return view('home')->with('name','Home Page');

   		// $name = 'Home Page';
   		// return view('home',compact('name'));
   	}

   	public function phpPage()
   	{
   		return view('php', [
	    	'data' => array(
	    		'lesson1' => 'this is PHP lesson 1',
	    		'lesson2' => 'this is PHP lesson 2',
	    		'lesson3' => 'this is PHP lesson 3',
	    	)
    	]);
   	}

   	public function jsPage()
   	{
   		return view('js', [
	    	'data' => array(
	    		'lesson1' => 'this is JS lesson 1',
	    		'lesson2' => 'this is JS lesson 2',
	    		'lesson3' => 'this is JS lesson 3',
	    	)
	    ]);
   	}
}
