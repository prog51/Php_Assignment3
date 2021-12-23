<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
	
 public function home()
	{
		
		$fruits = ["Apple","mango","Pear"];
		
		
		return view('welcome',['fruits' => $fruits, 'sample' => 'meat']);
		   
				
	}
	
	public function dashboard()
	{
		return view('/admin');
	}
	
	
	public function contact()
	  {
		  return view('contact', ['contact' => 'Welcome to the contact page']);
	  }
	  
	 public function about()
	  {
		  return view('about', ['about' => 'Welcome to the about page']);
	  }
	  
	  public function academics()
	  {
		 return view('/academics'); 
	  }
}
